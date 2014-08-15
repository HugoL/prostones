<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
    'Presupuesto',
    );*/

/*$this->menu=array(
    array('label'=>'Create Material', 'url'=>array('create')),
    array('label'=>'Manage Material', 'url'=>array('admin')),
    );*/
    ?>
    <script type="text/javascript"> 
$(document).ready(function(){
    $(".ejemplo_img").mouseenter(function() {
        $(".ejemplo_img_cont", this).stop().animate({ top:'31px' },{ queue:false, duration:300 });
    });
    $(".ejemplo_img").mouseleave(function() {
        $(".ejemplo_img_cont", this).stop().animate({ top:'48px' },{ queue:false, duration:300 });
    });
});
</script>
    <?php $url_action = CHtml::normalizeUrl(array('/presupuesto/ajaxPreciounitario')); ?>
    <?php Yii::app()->getClientScript()->registerScript("ejemplo_ajax",
        "
        $('#Valorpieza_id_tamano').change(function(){        

            idtipo = $('#Valorpieza_id_tipo').val();
            idtamano = $('#Valorpieza_id_tamano').val();
            $.ajax({
                url: '$url_action', type: 'post', 
                data: { id_tipo: idtipo, id_tamano: idtamano },
                success: function(response){
                    $('#preciounitario').html(response);
                },
                error: function(e){
                    $('#preciounitario').html(e.responseText);
                }
            });
      $('html, body').animate({scrollTop: $('#terminaciones').offset().top +300 }, 'slow');
    $('#terminaciones').show('slow');
    $('#pregunta2').attr('style','display:none');
        $('#ok2').attr('style','display:block');
});


",CClientScript::POS_LOAD); ?>

<h1>Presupuesto</h1>

<?php
//Galeria de imágenes
$imageArray = array(
    array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image1.jpg', 'alt'=>'first image is missing', 'htmlOptions'=>array('title'=>'First image')),
    array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image2.jpg', 'htmlOptions'=>array('title'=>'Second image')),
    );
    ?>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'valorpieza-form',
        'action'=>Yii::app()->createUrl('presupuesto/index'),
        'enableAjaxValidation'=>true,
        )); ?>

        <div class="row">

            <!-- div central -->
            <div class="span8 panel">

                
                <div id="inicio" class="span12" >
                   <a href="#"> 
                   <div class="span2 offset3 ini">
                   <li align="center">  Empezar</li>
                    </div></a>
                    <div class="span9">
                    Haga click en <strong>Empezar</strong> para crear su presupuesto. Mediante 4 pasos, podrá seleccionar los materiales que necesite y analizar el presupuesto en el pdf que le daremos.
                    <br>
                    </div>

                     
                </div>
                
                <div class="span12 row" id="material" style="
                display:none"><!-- PASO 1 MATERIAL-->
                    <div class="span2 pasos" >
                        <div class="span6"><font size="3">
                        <strong style="color:#134263;">Material</strong></font>
                        </div>

                         <div class="span6" id="pregunta1">
                             <img  style="float: right;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png ?>"/>
                         </div> 
                          <div class="span6" id="ok1" style="display:none">
                             <img style="float: right;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png ?>"/>
                         </div> 

                         <div class="span12">
                            <p align="left" style="font-size:12px"><strong>Paso 1</strong></p>
                         </div>

                        
                    </div>

                    <div class="cuadropresu span10">

                        <div class="span12">
                            Seleccione el <strong>material</strong>.
                        </div>
                        <div class="span12">
                        <div class="span8 bordepresu">
                            <?php if( !empty($materiales) ):?> 

                            <ul>   
                                <?php foreach ( $materiales as $key => $material ): ?>
                                 <a href="#" id="material<?php echo $material->id; ?>" onclick="vermaterial(<?php echo $material->id; ?>);">   
                                <li class="span2 offset1 color<?php echo $material->id; ?>">
                                    <?php echo $material->nombre; ?>
                                </li>
                                    </a>
                                    <?php //echo CHtml::link($material->nombre,array('presupuesto/index/idMaterial/'.$material->id),array('class'=>'thumbnail mate','rel'=>'tooltip','data-title'=>'Tooltip')); ?>

                                
                            <?php endforeach; ?>
                             </ul>
                             <?php endif; ?>
                        </div>

                        <div class="span4">
                             <font size="1">  Consulte la  información de los materiales y sus caracteristicas técnicas."<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/tipo/verCaracteristicas/id/12">Ver catálogo.</a></font>
                        </div>
            </div>

         <div class="clearfix">&nbsp;</div>    


         <div class="span12" id="tipos">

            <?php if( !empty($tipos) ): ?>
                 <div class="ejemplo span12">
                 <div class="clearfix"></div>
                        <?php foreach ( $tipos as $key => $tipo ): ?>  
               

            <div class="span2  ejemplo_img tipos tipo<?php echo $tipo->id_material; ?>" id="<?php echo $tipo->id; ?>"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes']."large/".$tipo->imagen; ?>"alt="<?php echo $tipo->nombre; ?>" width="100" height="50" /></a><div class="ejemplo_img_cont"><?php echo $tipo->nombre; ?></div></div>


            <?php endforeach; ?>
            </div>
                    <div class="clearfix">&nbsp;</div>
                <?php endif; ?>
        </div>

    </div>
</div>
<!--FIN PASO 1-->




<div class="span12 row" id="tipo_piezas" style="display:none"> <!-- PASO 2 TIPO DE PIEZA: Baldosa, rodapie...; tamaños y precios-->

    <div class="span2 pasos" >
                    <div class="span6"><font size="3">
                        <strong style="color:#134263;">Formato</strong></font><br>
                    </div>

                    <div class="span6" id="pregunta2">
                    <img  style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png ?>"/>
                    </div> 
                     <div class="span6" id="ok2" style="display:none">
                    <img style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png ?>"/>
                    </div> 

                    <div class="span12">
                        <p align="left" style="font-size:12px"><strong>Paso 2</strong></p>
                    </div>
    </div>


    
    <div class="cuadropresu span10">
    <div class="span12">
        Seleccione el <strong>formato de pieza</strong> y el <strong>tamaño</strong>.
    </div>
        <div class="span4 pa">
        <?php if( !empty($piezas) ): ?>
            <?php echo CHtml::activeDropDownList($valorpieza, 'id_pieza', CHtml::listData($piezas,'id', 'nombre'),
            array('class'=>'piezas','prompt'=>'Selecciona formato'));?>
        <?php endif; ?>

        </div>
        <div class="span4 pa" id="tamanos" style="display:none">
            <select id="Valorpieza_id_tamano" name="Valorpieza[id_tamano]">
                <option value="">Selecciona tamaño</option>
                <?php foreach ($tamanos as $key => $tamano) : ?>
                    <option class="optiontamano <?php echo "tamano".$tamano->id_pieza; ?>" value="<?php echo $tamano->id ?>" style="display:none"><?php echo $tamano->nombre; ?></option>
                <?php endforeach; ?>                
            </select>            
        </div>
        <!-- tamaños -->
        <!--METER PRECIO UITARIO-->
        <div id="preciounitario" class="span3"></div>

        <!--fin precio unitario-->
    </div>



</div><!-- FIN PASO 2-->

<div class="span12" id="terminaciones" style="display:none"><!--PASO 3-->

    <div class="span2 pasos" >
        <div class="span6">
            <strong style="color:#134263;"><font size="3">Acabado</font></strong><br>
        </div>

            <div class="span6" id="pregunta3">
                <img style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png ?>"/>
            </div> 
            <div class="span6" id="ok3" style="display:none">
                <img style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png ?>"/>
            </div> 

        <div class="span12">
                        <p align="left" style="font-size:12px"><strong>Paso 3</strong></p>
        </div>
    </div>


    
    <div class="cuadropresu span10">

        <div class="span12">
            Seleccione la <strong>terminacion</strong> de la pieza.
        </div>

        <div class="span4 pa">
            <?php if( !empty($terminaciones) ): ?>

            <?php echo CHtml::activeDropDownList($valorpieza, 'id_terminacion', CHtml::listData($terminaciones,'id', 'nombre'),
            array('prompt'=>'Selecciona terminacion'));?>

            <?php endif; ?>
        </div>

    <div class="span2">
     Biselado<input type="checkbox" id="biselados" />
 </div>

 <!-- biselados -->

<div class="span4" id="tamañobiselados" style="display:none">
    <?php echo CHtml::activeDropDownList($valorpieza, 'id_biselado', CHtml::listData($biselados,'id', 'tamano')); ?>

</div>
<!-- /biselados -->

</div>
</div><!--FIN PASO 3-->

<div class="span12" id="cantidad"  style="display:none" ><!--PASO 4-->

    <div class="span2 pasos" >
        <div class="span6">
            <strong style="color:#134263;"><font size="3">Cantidad y destino</font></strong><br>
        </div>

            <div class="span6" id="pregunta4">
                <img style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/pregunta.png ?>"/>
            </div> 
            <div class="span6" id="ok4" style="display:none">
                <img style="float:right" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ok.png ?>"/>
            </div> 

        <div class="span12">
                        <p align="justify" style="font-size:12px">Paso 4</p>
        </div>
    </div>


    
    <div class="cuadropresu span10">
     <div class="span12">
            Seleccione la cantidad y el destino de la pieza.
        </div>
        <div class="span12">
            <div class="span6">
                   <div class="span12 po">

                       <?php echo $form->errorSummary($valorpieza); ?>

                        <?php /*echo $form->labelEx($valorpieza,'cantidad');*/ ?> 
                        <?php echo $form->textField($valorpieza,'cantidad'); ?>
                        <?php echo $form->error($valorpieza,'cantidad'); ?>
                        <span id="medida"></span>
                    </div>

                    <div class="span12 pa" id="destino">
                        <?php echo CHtml::activeDropDownList($valorpieza, 'destino', CHtml::listData(Provincia::model()->findAll(array('order'=>'nombre ASC')), 'id', 'nombre'),array('empty'=>'Selecciona destino'));?>
                    </div>
            </div>

            <div class="span6" id="boton" style="display:none">
                <div class="row">

                    <?php echo $form->hiddenField($valorpieza,'id_tipo',array('value'=>'0')); ?>
                    <?php //echo $form->hiddenField($valorpieza,'id_tamano',array('value'=>'0')); ?>
                    <?php echo $form->hiddenField($valorpieza,'precio',array('value'=>'0')); ?>
                    <?php //echo $form->hiddenField($valorpieza,'id_terminacion'); ?>
                    <?php //echo $form->hiddenField($valorpieza,'id_pieza',array('value'=>'0')); ?>
                    <?php 
                        //Si el presupuesto ya está creado y se están añadiendo piezas, pongo el id del presupuesto
                    if( isset($presupuesto) ):
                        $idPresupuesto = $presupuesto->id;
                    else:
                        $idPresupuesto = 0;
                    endif;
                    echo $form->hiddenField($valorpieza,'id_presupuesto',array('value'=>$idPresupuesto)); ?>
                </div>

                <div class="row buttons">
                    <?php echo CHtml::submitButton($valorpieza->isNewRecord ? 'Añadir al presupuesto' : 'Añadir al presupuesto'); ?>
                </div>
            </div>
        </div>

    </div>

   

    <?php $this->endWidget(); ?>
</div><!--FIN PASO 4-->




</div><!--FIN DIV CENTRAL-->

<div class="span4"><!--LISTA DE PIEZAS EN EL PRESUPUESTO-->

    <?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('danger')):?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('danger'); ?>
    </div>
<?php endif; ?>

<!-- piezas guardadas -->
<div id="piezasguardadas" class="span12">
Tu presupuesto:
    <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
    $criteria=new CDbCriteria;                      
    $criteria->compare('id_presupuesto',$presupuesto->id);  
    $criteria->select = '*';
    $piezas = Valorpieza::model()->findAll($criteria);  ?>
    
    <?php foreach ($piezas as $key => $pieza): ?>

    <div class="well span11">
        <div class="clearfix"></div>    
        <div class="span12" style="background-color:white; padding:5px; border:1px solid #134263; margin-bottom:10px;">
        
           1 - <font style="text-decoration: underline">Partida:</font> <br>
            <?php echo $pieza->tamanoreal; ?> 

            <?php if( $pieza->id_pieza == 1 ){
                echo "m<sup>2</sup>";
            }else{
                echo "m.";
            }  ?>  de <?php echo $pieza->tipo->nombre; ?>. <?php echo $pieza->pieza->nombre; ?>s de <?php echo $pieza->tamano->nombre; ?>. 
            <div class="span8 offset3" align="right">
             <?php echo $pieza->numeropiezas; ?> piezas a X . Precio= <?php echo $preciopieza; ?> €.
           </div>
           <div class="span12">
            1.1 - <font style="text-decoration: underline">Terminación:</font><br>
            <?php echo $pieza->terminacion->nombre; ?>.<?php echo $pieza->terminacion->precio; ?> €/ 
            <?php if( $pieza->id_pieza == 1 ){
                echo "m<sup>2</sup>";
            }else{
                echo "m.";
            }  ?> . Precio:<?php echo $precioterminacion; ?> €.
            </div>
        
  <div class="span8 offset3" style="background-color:#acb2e3; padding:5px; border:1px solid #134263; ">
            Precio material : <strong><?php echo $precioterminacion + $preciopieza; ?>  €.</strong>
        </div>
        </div>
      

        <div class="span12" style="background-color:white; padding:5px; border:1px solid #134263; margin-bottom:10px;">
          2 - Transporte (opcional)<br>
          Peso: <?php echo $pieza->peso; ?> Kg. De <?php echo $pieza->tipo->provincia->nombre ?>  a <?php echo $pieza->provincia->nombre; ?><br><?php echo $entero + 1; ?> pales.


        <div align="right" class="span8 offset3" style="background-color:#acb2e3; padding:5px; border:1px solid #134263;">
           Precio transporte:
          <strong><?php echo $preciotransporte; ?> €. </strong>
        </div>
          
       </div>
       <div class="span12" align="right" style="background-color:white; padding:5px; border:1px solid #134263; margin-bottom:10px;">
           Material + transporte: <?php echo $pieza->precio; ?>€.<br>
           IVA:21%: <?php echo (21*$pieza->precio/100); ?> €.<br>
          <font size="3"><strong> Total: <?php echo $pieza->precio+(21*$pieza->precio/100); ?> €.</strong></font>

       </div>
       <div class="clearfix"></div>
   </div>

<?php endforeach; ?>
<?php endif; ?>
</div>

<div class="span4">
    <?php if (isset($presupuesto) ): ?>

    <?php $form2=$this->beginWidget('CActiveForm', array(
        'id'=>'presupuesto-form',
        'action'=>Yii::app()->createUrl('presupuesto/generar/id/'.$presupuesto->id),
        'enableAjaxValidation'=>true,
        )); ?>

        <?php echo $form2->hiddenField($presupuesto,'id',array('value'=>$presupuesto->id)); ?>
        <?php echo $form2->labelEx($presupuesto,'email');
        echo $form2->textField($presupuesto,'email'); ?>
      
        <?php echo $form2->labelEx($presupuesto,'nombre');
        echo $form2->textField($presupuesto,'nombre'); ?>
        <?php echo CHtml::submitButton('Generar Presupuesto'); ?>
        <?php $this->endWidget(); ?>
    <?php endif; ?>
</div>
</div><!-- FIN LISTA DE PIEZAS EN EL PRESUPUESTO-->

</div><!-- /row -->
<!-- ------------- -->

<script>
$(document).ready(function($){

    $("#Valorpieza_cantidad").val(" ");
   $("#Valorpieza_id_pieza").val("");
    $("#Valorpieza_id_tamano").val("");
    $("#Valorpieza_id_terminacion").val("");

    $("#inicio").click(function(){
        $("#inicio").hide();
        $("#material").show('slow');
        
        //$(document).scrollTop( $("#piezas").offset().top );  
       //$("#Valorpieza_id_pieza").value("1");        
   });

 



    $(".tipos").fadeOut();
    $(".tipos").click(function(){
        $("#Valorpieza_id_tipo").val($(this).attr("id"));
        $("#tipo_piezas").show('slow');

        $("#pregunta1").attr('style','display:none');
        $("#ok1").attr('style','display:block');

        //id="<?php echo $tipo->id; ?>
        $(".tipos, .id").attr("style","border:1 px solid black;");


        //$(document).scrollTop( $("#tipo_piezas")().offset().top);
        //$('html, body').animate({scrollTop: $('#tipo_piezas').offset().top -70 }, 'slow');

       // $('#tipo_piezas').scrollView();
       //$("#Valorpieza_id_pieza").value("1");        
   });

    $("#Valorpieza_id_pieza").change(function(){
        //alert("hola: "+$(this).attr("id"));
       //$("#Valorpieza_id_pieza").val($(this).attr("id"));
      
       $("#Valorpieza_id_tamano").val("");
       $("#tamanos").show('slow');
       $(".optiontamano").attr('style','display:none');
       $(".tamano"+$("#Valorpieza_id_pieza").val()).attr('style','display:block');
       //$(document).scrollTop( $("#terminaciones").offset().top );
       if( $("#Valorpieza_id_pieza").val() == 1 ){
        $("#medida").html("m2.");
    }else{
        $("#medida").html("m.");
    }  
});


    $("#biselados").click(function(){
       $("#tamañobiselados").show('slow');

   });

    $("#Valorpieza_id_terminacion").change(function(){
        //alert("hola: "+$(this).attr("id"));
         $("#pregunta3").attr('style','display:none');
        $("#ok3").attr('style','display:block');
        $("#Valorpieza_id_terminacion").val($(this).attr("value"));
        $("#cantidad").show('slow');

    });

     $("#destino").change(function(){
        $("#boton").show('slow');
    });
});
</script>

<script type="text/javascript">

function vermaterial( idmaterial ){
    $(".tipos").show('slow');
$(".tipos").attr("style","display:none;");

    $(".tipo"+idmaterial).attr("style","display:block;");

}
   

</script>

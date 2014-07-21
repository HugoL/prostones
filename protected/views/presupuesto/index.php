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
    'enableAjaxValidation'=>false,
)); ?>



<div class="row">



<!-- div central -->
<div class="span8 panel">

<div class="span12">
    
Para iniciar la creación de un nuevo presupuesto haga click en <strong>Añadir pieza al presupuesto</strong>. Se le solicitara la informacion en 4 pasos, al terminar, haga click en <strong>Añadir</strong> para introducir la pieza al presupuesto.Esta pieza y las que añadas, aparecera en el lado derecho  de la pantalla. Cuando acabe de añadir piezas, haga click justo debajo en <strong> Generar presupuesto</strong> para crear el archivo pdf del mismo.<br><br>
<br>
</div>
<div id="inicio" class="span4 offset4"><p align="center" >
<a href="#">Añadir pieza al presupuesto</a>
</div>
 <div class="span12 row" id="material" style="display:none"><!-- PASO 1 MATERIAL-->
        <div class="span2 pasos" ><strong style="color:#134263;">Paso 1</strong><br>
        <p align="justify" style="font-size:10px">Seleccione el tipo de material que desea entre nuestro catálogo de materiales.</p>

        </div>

        <div class="well span10">

<div class="span8">
            <?php if( !empty($materiales) ):?> 
     
                <ul>   
                <?php foreach ( $materiales as $key => $material ): ?>
                    <li class="span2">
                        <a href="#" id="material<?php echo $material->id; ?>" onclick="vermaterial(<?php echo $material->id; ?>);"><?php echo $material->nombre; ?></a>
                        <?php //echo CHtml::link($material->nombre,array('presupuesto/index/idMaterial/'.$material->id),array('class'=>'thumbnail mate','rel'=>'tooltip','data-title'=>'Tooltip')); ?>
                        
                    </li>
                <?php endforeach; ?>
                </ul>
<?php endif; ?>
</div>
<div class="span4">
   <font size="0.8">  Consulte la  información de los materiales y sus caracteristicas técnicas.<a href="#">Ver catálogo.</a></font>
</div>
               
                <div class="clearfix">&nbsp;</div>    
            
            
<div class="span12" id="tipos" style="display:none">
        
            <?php if( !empty($tipos) ): ?>
           
            <?php foreach ( $tipos as $key => $tipo ): ?>    
                <li class="span2">
                    <div class="tipos tipo<?php echo $tipo->id_material; ?>" id="<?php echo $tipo->id; ?>">
                    <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes']."large/".$tipo->imagen; ?>" alt="<?php echo $tipo->nombre; ?>"><center><?php echo $tipo->nombre; ?></center>
                    </div>            
                </li>
            <?php endforeach; ?>
            <div class="clearfix">&nbsp;</div>
            <?php endif; ?>
        </div>


        </div>
 
        
    </div><!--FIN PASO 1-->




<div class="span12 row" id="tipo_piezas" style="display:none"> <!-- PASO 2 TIPO DE PIEZA: Baldosa, rodapie...; tamaños y precios-->
    
<div class="span2 pasos" ><strong style="color:#134263;">Paso 2</strong><br>
        <p align="justify" style="font-size:10px">Seleccione el tipo de pieza y el tamaño que se adapte a su idea.</p>

        </div>

        <div class="well span10">
    <?php if( !empty($piezas) ): ?>
        <?php echo CHtml::activeDropDownList($valorpieza, 'id_pieza', CHtml::listData($piezas,'id', 'nombre'),
        array('class'=>'piezas','prompt'=>'Selecciona tipo de pieza'));?>
     <?php endif; ?>

     <div class="span4" id="tamanos" style="display:none">
        <?php echo CHtml::activeDropDownList($valorpieza, 'id_tamano', CHtml::listData($tamanos,'id', 'nombre'),array('prompt'=>'Selecciona tamaño'));?>
    </div>
    <!-- tamaños -->
<!--METER PRECIO UITARIO-->
Precio por m2 de esta pieza...


<!--fin precio unitario-->
</div>


    
</div><!-- FIN PASO 2-->

<div class="span12" id="terminaciones" style="display:none"><!--PASO 3-->
<div class="span2 pasos" ><strong style="color:#134263;">Paso 3</strong><br>
        <p align="justify" style="font-size:10px">Seleccione el tipo de acabado de la pieza, así como alguna característica especial.</p>

        </div>
<div class="well span10">
            <?php if( !empty($terminaciones) ): ?>

  <?php echo CHtml::activeDropDownList($valorpieza, 'id_terminacion', CHtml::listData($terminaciones,'id', 'nombre'),
        array('prompt'=>'Selecciona terminacion'));?>

       
     <?php endif; ?>


  <div class="span6">
       <label>Biselado</label><input type="checkbox" id="biselados" />
    </div>

     <!-- biselados -->
     <div class="span4" id="biselados">
        <?php echo $form->labelEx($valorpieza,'id_biselado'); ?>
        
    </div>
<div class="span4" id="tamañobiselados" style="display:none">
    <?php echo CHtml::activeDropDownList($valorpieza, 'id_biselado', CHtml::listData($biselados,'id', 'tamano')); ?>
        
        </div>
    <!-- /biselados -->

        </div>
    </div><!--FIN PASO 3-->

<div class="span12" id="cantidad"  style="display:none" ><!--PASO 4-->
<div class="span2 pasos" ><strong style="color:#134263;">Paso 4</strong><br>
        <p style="font-size:10px">Seleccione la cantidad de material que necesita y el lugar donde le gustaria recibirla (transporte opcional).</p>

        </div>
<div class="well span10">
  
<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($valorpieza); ?>

    
    
       <?php echo $form->labelEx($valorpieza,'cantidad'); ?> <span id="medida"></span>
        <?php echo $form->textField($valorpieza,'cantidad'); ?>
        <?php echo $form->error($valorpieza,'cantidad'); ?>


        Destino:

                 <?php //echo CHtml::activeDropDownList($valorpieza, 'id_provincia', CHtml::listData($provincias,'id', 'nombre'),array('prompt'=>'Selecciona destino'));?>
    </div>

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

<?php $this->endWidget(); ?>
    </div><!--FIN PASO 4-->


</div><!--FIN DIV CENTRAL-->

<div class="span3"><!--LISTA DE PIEZAS EN EL PRESUPUESTO-->

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
<div id="piezasguardadas">
    <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
        $criteria=new CDbCriteria;                      
        $criteria->compare('id_presupuesto',$presupuesto->id);  
        $criteria->select = '*';
        $piezas = Valorpieza::model()->findAll($criteria); 
        $this->debug($piezas); ?>
        <span>Pieza:</span>
        <?php foreach ($piezas as $key => $pieza): ?>

              <div class="well">
                <div class="clearfix"></div>    
                <div class="span12">
                    <?php echo $pieza->tamanoreal; ?> 

                    <?php if( $pieza->id_pieza == 1 ){
            echo "m<sup>2</sup>";
        }else{
            echo "m.";
        }  ?>  de <?php echo $pieza->tipo->nombre; ?>. <?php echo $pieza->pieza->nombre; ?>s de <?php echo $pieza->tamano->nombre; ?>.<br>
                    Nº de piezas: <?php echo $pieza->numeropiezas; ?>. 
                    Terminación: <?php echo $pieza->terminacion->nombre; ?>.
                </div>
                <div class="span4 offset8">
                    Precio: <?php echo $pieza->precio; ?>€.
                </div>

                <div class="span12">
                 TRANSPORTE (opcional)<br>
                 Peso: <?php echo $pieza->peso; ?>Kg. De <?php echo $pieza->tipo->procedencia; ?>  a <?php echo $pieza->destino; ?>.

                </div>
                 <div class="span4 offset8">
                 Precio: _ €.
                </div>
                Total: 
</div>

        <?php endforeach; ?>
    <?php endif; ?>
</div>

<div class="span4 well">
    <?php if (isset($presupuesto) ): ?>

        <?php $form2=$this->beginWidget('CActiveForm', array(
        'id'=>'presupuesto-form',
        'action'=>Yii::app()->createUrl('presupuesto/generar/id/'.$presupuesto->id),
        'enableAjaxValidation'=>true,
        )); ?>

        <?php echo $form2->hiddenField($presupuesto,'id',array('value'=>$presupuesto->id)); ?>
        <?php echo $form2->labelEx($presupuesto,'email');
            echo $form2->textField($presupuesto,'email'); ?>
        <?php echo $form2->labelEx($presupuesto,'id_provincia');
            echo $form2->textField($presupuesto,'id_provincia'); ?>
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
        //$(document).scrollTop( $("#tipo_piezas")().offset().top);
        $('html, body').animate({scrollTop: $('#tipo_piezas').offset().top -100 }, 'slow');
       
       // $('#tipo_piezas').scrollView();
       //$("#Valorpieza_id_pieza").value("1");        
    });
    $("#Valorpieza_id_pieza").change(function(){
        //alert("hola: "+$(this).attr("id"));
       //$("#Valorpieza_id_pieza").val($(this).attr("id"));
       $("#tamanos").show('slow');
       
       //$(document).scrollTop( $("#terminaciones").offset().top );
       if( $("#Valorpieza_id_pieza").val() == 1 ){
            $("#medida").html("m2.");
        }else{
            $("#medida").html("m.");
        }  
    });

    $("#tamanos").change(function(){
        
        $("#terminaciones").show('slow');

    });

   

     $("#biselados").click(function(){
         $("#tamañobiselados").show('slow');

    });

    $("#Valorpieza_id_terminacion").change(function(){
        //alert("hola: "+$(this).attr("id"));
       $("#Valorpieza_id_terminacion").val($(this).attr("value"));
       $("#cantidad").show('slow');
       
    });
});
</script>
<script type="text/javascript">
function vermaterial( idmaterial ){
    $(".tipo"+idmaterial).toggle();
    $("#tipos").show('slow');
}
</script>

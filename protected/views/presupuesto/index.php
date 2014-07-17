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



<div class="row">
 <!-- /well span2 -->

<!-- div central -->
<div class="span8 panel">

    <div class="span12 row">
        <div class="span2">Paso 1</div>

        <div class="well span10">
            <?php if( !empty($materiales) ):?> 
                <ul>   
                <?php foreach ( $materiales as $key => $material ): ?>
                    <li class="span2">
                        <a href="#" id="material<?php echo $material->id; ?>" onclick="vermaterial(<?php echo $material->id; ?>);"><?php echo $material->nombre; ?></a>
                        <?php //echo CHtml::link($material->nombre,array('presupuesto/index/idMaterial/'.$material->id),array('class'=>'thumbnail mate','rel'=>'tooltip','data-title'=>'Tooltip')); ?>
                        
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearfix">&nbsp;</div>    
            <?php endif; ?>
        </div>
    </div>

    <div class="span12 row" id="tipos" style="display:none">

        <div class="span2">Paso 2</div>
        <div class="well span10">
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


     <div class="span12 row" id="piezas" style="display:none">

       <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'valorpieza-form',
    'action'=>Yii::app()->createUrl('presupuesto/index'),
    'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->errorSummary($valorpieza); ?>
            <div class="span2">Paso 3</div>

        <div class="well span10" ><!-- piezas -->
         
        <?php if( !empty($piezas) ): ?>

<?php echo CHtml::activeDropDownList($valorpieza, 'id_pieza', CHtml::listData($piezas,'id', 'nombre'),
        array('class'=>'piezas','prompt'=>'Selecciona tipo de pieza'));?>

            



            <!--<?php foreach ( $piezas as $key => $pieza ): ?>    
            <li>
                <div class="piezas" style="display:none" id="<?php echo $pieza->id; ?>">
                    <a href="#"><?php echo $pieza->nombre; ?></a>
                </div>            
            </li>
            <?php endforeach; ?>-->

         <?php endif; ?>
        </div><!-- /piezas -->
    </div>
    
   
  
    <div class="span12 row" id="terminaciones" style="display:none">
         <div class="span2">Paso 4</div>
<?php $this->debug($valorpieza); ?>
         <div class="well span10" > <!-- terminaciones -->
            <?php if( !empty($terminaciones) ): ?>

               <!-- <?php echo CHtml::activeDropDownList($valorpieza, 'id_terminacion', CHtml::listData($terminaciones,'id', 'nombre')); ?>-->

                <?php foreach ( $terminaciones as $key => $terminacion ): ?>    
        <li class="span2">
            <div class="terminacion" id="<?php echo $terminacion->id; ?>">
                <center><a href="#"><?php echo $terminacion->nombre; ?></a></center>
            </div>            
        </li>
        <?php endforeach; ?>
        
         <?php endif; ?>
        </div><!-- /terminaciones --> 


    </div>
    
   


</div><!-- /Div central -->


<div class="span3"> <!-- Div  lista del presupuesto -->
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
<div class="well" id="piezasguardadas">
Lista de piezas del presupuesto.<br><br>
    <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
        $criteria=new CDbCriteria;                      
        $criteria->compare('id_presupuesto',$presupuesto->id);  
        $criteria->select = '*';
        $piezas = Valorpieza::model()->findAll($criteria); 
        $this->debug($piezas); ?>
        <span>Piezas:</span>
       
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
</div><!-- /Div  lista del presupuesto -->


</div><!-- /row -->
<!-- ------------- -->



<div class="row">
 

    <div class="row">
  
     <!-- tamaños y biselado -->
         <div class="span4" id="tamanos" style="display:none">
            <?php echo $form->labelEx($valorpieza,'id_tamano'); ?>
            <?php echo CHtml::activeDropDownList($valorpieza, 'id_tamano', CHtml::listData($tamanos,'id', 'nombre')); ?>


             <label>Biselado</label><input type="checkbox" id="biselados" />

            <div class="span4" id="biselados">
                <?php echo $form->labelEx($valorpieza,'id_biselado'); ?>
                <?php echo CHtml::activeDropDownList($valorpieza, 'id_biselado', CHtml::listData($biselados,'id', 'tamano')); ?>
                <?php $this->debug($biselados); ?>
            </div>

        </div>
    <!-- /tamaños y biselado -->
    </div><!-- /row -->

    <div class="row">
    

      <div class="span6">
       <?php echo $form->labelEx($valorpieza,'cantidad'); ?> <span id="medida"></span>
        <?php echo $form->textField($valorpieza,'cantidad'); ?>
        <?php echo $form->error($valorpieza,'cantidad'); ?>
    </div>
    </div><!-- /row -->
               
    <div class="row">
        <?php echo $form->hiddenField($valorpieza,'id_tipo',array('value'=>'0')); ?>
        <?php //echo $form->hiddenField($valorpieza,'id_tamano',array('value'=>'0')); ?>
        <?php echo $form->hiddenField($valorpieza,'precio',array('value'=>'0')); ?>
        <?php echo $form->hiddenField($valorpieza,'id_terminacion'); ?>
        <?php echo $form->hiddenField($valorpieza,'id_pieza',array('value'=>'0')); ?>
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


<!-- ---------------- -->
</div><!-- /row -->



<script>
$(document).ready(function($){

     

    $(".tipos").fadeOut();
    $(".tipos").click(function(){
        $("#piezas").show('slow');
        $("#Valorpieza_id_tipo").val($(this).attr("id"));
        $(".piezas").show();
        $(document).scrollTop( $("#piezas").offset().top );  

       //$("#Valorpieza_id_pieza").value("1");        
    });

    $("#Valorpieza_id_pieza").change(function(){
        //alert("hola: "+$(this).attr("id"));
       $("#Valorpieza_id_pieza").val($(this).attr("id"));
       $("#terminaciones").show();
       $(document).scrollTop( $("#terminaciones").offset().top );//para que se mueva a la altura del siguiente paso
       if( $("#Valorpieza_id_pieza").val() == 1 ){
            $("#medida").html("m<sup>2</sup>.");
        }else{
            $("#medida").html("m.");
        }  
    });
    $(".terminacion").click(function(){
        //alert("hola: "+$(this).attr("id"));
       $("#Valorpieza_id_terminacion").val($(this).attr("id"));
       $("#tamanos").show('slow');
    });
});
</script>

<script type="text/javascript">
function vermaterial( idmaterial ){
    
    $(".tipo"+idmaterial).toggle();
    $("#tipos").show('slow');
}
</script>
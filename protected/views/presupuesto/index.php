<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presupuesto',
);

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

<div class="row">
 <div class="well span2">
<?php if( !empty($materiales) ):?>    
    <?php foreach ( $materiales as $key => $material ): ?>
        <li class="span12">
            <a href="#" id="material<?php echo $material->id; ?>" onclick="vermaterial(<?php echo $material->id; ?>);"><?php echo $material->nombre; ?></a>
            <?php //echo CHtml::link($material->nombre,array('presupuesto/index/idMaterial/'.$material->id),array('class'=>'thumbnail mate','rel'=>'tooltip','data-title'=>'Tooltip')); ?>
            
        </li>
    <?php endforeach; ?>
    <div class="clearfix">&nbsp;</div>    
<?php endif; ?>
</div><!-- /well span2 -->

<!-- div central -->
<div class="span10 panel">
    <?php if( !empty($tipos) ): ?>
   
    <?php foreach ( $tipos as $key => $tipo ): ?>    
        <li class="span2">
            <div class="thumbnail tipos tipo<?php echo $tipo->id_material; ?>" id="<?php echo $tipo->id; ?>">
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$tipo->imagen; ?>" alt="<?php echo $tipo->nombre; ?>"><center><?php echo $tipo->nombre; ?></center>
            </div>            
        </li>
    <?php endforeach; ?>
    <div class="clearfix">&nbsp;</div>
    <?php endif; ?>
</div>
</div><!-- /row -->
<!-- ------------- -->

<div class="row">
<div class="well span12"><!-- piezas -->
    <?php if( !empty($piezas) ): ?>
        <?php foreach ( $piezas as $key => $pieza ): ?>    
        <li class="span1">
            <div class="piezas" style="display:none" id="<?php echo $pieza->id; ?>">
                <center><a href="#"><?php echo $pieza->nombre; ?></a></center>
            </div>            
        </li>
        <?php endforeach; ?>
     <?php endif; ?>
</div><!-- /piezas -->
</div><!-- /row -->

<!-- terminaciones -->
  <div class="row">
        <div class="well span12" id="terminaciones" style="display:none">
            <?php if( !empty($terminaciones) ): ?>
        <?php foreach ( $terminaciones as $key => $terminacion ): ?>    
        <li class="span1">
            <div class="terminacion" id="<?php echo $terminacion->id; ?>">
                <center><a href="#"><?php echo $terminacion->nombre; ?></a></center>
            </div>            
        </li>
        <?php endforeach; ?>
     <?php endif; ?>
        </div>
    </div>
    <!-- /terminaciones -->   

<div class="row">
   <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'valorpieza-form',
    'action'=>Yii::app()->createUrl('presupuesto/index'),
    'enableAjaxValidation'=>false,
)); ?>
<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($valorpieza); ?>

    <div class="row">
    <div class="span6">
        <?php echo $form->labelEx($valorpieza,'cantidad')." (m2)"; ?>
        <?php echo $form->textField($valorpieza,'cantidad'); ?>
        <?php echo $form->error($valorpieza,'cantidad'); ?>
    </div>

     <!-- tamaños -->
     <div class="span6">
    <?php echo $form->labelEx($valorpieza,'id_tamano'); ?>
    <?php echo CHtml::activeDropDownList($valorpieza, 'id_tamano', 
                           CHtml::listData($tamanos,'id', 'nombre')); ?>
    </div>
    <!-- /tamaños -->
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

<!-- piezas guardadas -->
<div class="span12">
    <?php if( $idPresupuesto != 0 ):
        $criteria=new CDbCriteria;                      
        $criteria->compare('id_presupuesto',$idPresupuesto);  
        $criteria->select = '*';
        $piezas = Valorpieza::model()->findAll($criteria); ?>
        <span>Pieza:</span>
        <?php foreach ($piezas as $key => $pieza): ?>
            <div class="well well-small">Tipo: <?php echo $pieza->id_tipo; ?>, Terminación: <?php echo $pieza->id_terminacion; ?> , precio: <?php echo $pieza->precio; ?>, Cantidad: <?php echo $pieza->cantidad; ?>, SubTotal: <?php echo $pieza->precio * $pieza->cantidad;?></div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<!-- ---------------- -->
</div><!-- /row -->
<script>
$(document).ready(function($) {
    $(".tipos").fadeOut();
    $(".tipos").click(function(){
        $("#Valorpieza_id_tipo").val($(this).attr("id"));
        $(".piezas").show();
       //$("#Valorpieza_id_pieza").value("1");
    });
    $(".piezas").click(function(){
        //alert("hola: "+$(this).attr("id"));
       $("#Valorpieza_id_pieza").val($(this).attr("id"));
       $("#terminaciones").show();
    });
    $(".terminacion").click(function(){
        //alert("hola: "+$(this).attr("id"));
       $("#Valorpieza_id_terminacion").val($(this).attr("id"));
    });

});
</script>
<script type="text/javascript">
function vermaterial( idmaterial ){
    $(".tipo"+idmaterial).toggle();
}
</script>
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
<?php if( !empty($materiales) ){ ?>    
    <?php foreach ( $materiales as $key => $material ){ ?>
        <li class="span12">
            <a href="presupuesto/index/idMaterial/<?php echo $material->id; ?>" class="thumbnail mate" rel="tooltip" data-title="Tooltip">
           <center><?php echo $material->nombre; ?></center>
            </a>
        </li>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>    
<?php } ?>
</div><!-- /well span2 -->

<!-- div central -->
<div class="span10 panel">
    <?php if( !empty($tipos) ){ ?>
   
    <?php foreach ( $tipos as $key => $tipo ){ ?>    
        <li class="span2">
            <div class="thumbnail tipos" id="<?php echo $tipo->id; ?>">
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$tipo->imagen; ?>" alt="<?php echo $tipo->nombre; ?>"><center><?php echo $tipo->nombre; ?></center>
            </div>            
        </li>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>
    <?php } ?>
</div>
</div><!-- /row -->
<!-- ------------- -->

<div class="row">
<div class="well span12"><!-- piezas -->
    <?php if( !empty($piezas) ){ ?>
        <?php foreach ( $piezas as $key => $pieza ){ ?>    
        <li class="span1">
            <div class="piezas" style="display:none" id="<?php echo $pieza->id; ?>">
                <center><a href="#"><?php echo $pieza->nombre; ?></a></center>
            </div>            
        </li>
        <?php } ?>
     <?php } ?>
</div><!-- /piezas -->
</div><!-- /row -->

<!-- terminaciones -->
  <div class="row">
        <div class="well span12" id="terminaciones" style="display:none">
            <?php if( !empty($terminaciones) ){ ?>
        <?php foreach ( $terminaciones as $key => $terminacion ){ ?>    
        <li class="span1">
            <div class="terminacion" id="<?php echo $pieza->id; ?>">
                <center><a href="#"><?php echo $terminacion->nombre; ?></a></center>
            </div>            
        </li>
        <?php } ?>
     <?php } ?>
        </div>
    </div>
    <!-- /terminaciones -->   

<div class="row">
   <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'valorpieza-form',
    'action'=>Yii::app()->createUrl('/valorpieza/calcular'),
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
        <?php echo $form->hiddenField($valorpieza,'id_tamano',array('value'=>'0')); ?>
        <?php echo $form->hiddenField($valorpieza,'precio',array('value'=>'0')); ?>
        <?php echo $form->hiddenField($valorpieza,'id_terminacion'); ?>
        <?php echo $form->hiddenField($valorpieza,'id_pieza',array('value'=>'0')); ?>
        <?php echo $form->hiddenField($valorpieza,'id_presupuesto',array('value'=>$valorpieza->id)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($valorpieza->isNewRecord ? 'Añadir al presupuesto' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- /row -->
<script>
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
</script>
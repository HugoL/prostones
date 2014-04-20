<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pieza'); ?>
		<?php echo $form->textField($model,'id_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tamano'); ?>
		<?php echo $form->textField($model,'id_tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_terminacion'); ?>
		<?php echo $form->textField($model,'id_terminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
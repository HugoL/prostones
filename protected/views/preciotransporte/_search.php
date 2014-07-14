<?php
/* @var $this PreciotransporteController */
/* @var $model Preciotransporte */
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
		<?php echo $form->label($model,'id_zona_destino'); ?>
		<?php echo $form->textField($model,'id_zona_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_zona_procedencia'); ?>
		<?php echo $form->textField($model,'id_zona_procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pale'); ?>
		<?php echo $form->textField($model,'pale'); ?>
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
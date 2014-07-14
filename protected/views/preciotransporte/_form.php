<?php
/* @var $this PreciotransporteController */
/* @var $model Preciotransporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preciotransporte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_zona_destino'); ?>
		<?php echo $form->textField($model,'id_zona_destino'); ?>
		<?php echo $form->error($model,'id_zona_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_zona_procedencia'); ?>
		<?php echo $form->textField($model,'id_zona_procedencia'); ?>
		<?php echo $form->error($model,'id_zona_procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pale'); ?>
		<?php echo $form->textField($model,'pale'); ?>
		<?php echo $form->error($model,'pale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
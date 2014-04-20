<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'valorpieza-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo'); ?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pieza'); ?>
		<?php echo $form->textField($model,'id_pieza'); ?>
		<?php echo $form->error($model,'id_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tamano'); ?>
		<?php echo $form->textField($model,'id_tamano'); ?>
		<?php echo $form->error($model,'id_tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_terminacion'); ?>
		<?php echo $form->textField($model,'id_terminacion'); ?>
		<?php echo $form->error($model,'id_terminacion'); ?>
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
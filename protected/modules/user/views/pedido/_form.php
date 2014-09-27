<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
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
 		<?php echo $form->dropDownList($model, 'id_tipo', Tipo::items(1)); ?>
 		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pieza'); ?>
		<?php echo $form->dropDownList($model,'id_pieza', Pieza::items(1)); ?>
		<?php echo $form->error($model,'id_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tamano'); ?>
		<?php echo $form->dropDownList($model,'id_tamano', Tamano::items(1)); ?>
		<?php echo $form->error($model,'id_tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_terminacion'); ?>
		<?php echo $form->dropDownList($model,'id_terminacion', Terminacion::items(1)); ?>
		<?php echo $form->error($model,'id_terminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_terminacion_arista'); ?>
		<?php echo $form->dropDownList($model,'id_terminacion_arista', Terminacion::items(1)); ?>
		<?php echo $form->error($model,'id_terminacion_arista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_terminacion_canto'); ?>
		<?php echo $form->dropDownList($model,'id_terminacion_canto', Terminacion::items(1)); ?>
		<?php echo $form->error($model,'id_terminacion_canto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_canto'); ?>
		<?php echo $form->textField($model,'id_tipo_canto'); ?>
		<?php echo $form->error($model,'id_tipo_canto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_destino'); ?>
		<?php echo $form->dropDownList($model,'id_destino', Provincia::items(1)); ?>
		<?php echo $form->error($model,'id_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cantidad'); ?>
		<?php echo $form->textField($model,'id_cantidad'); ?>
		<?php echo $form->error($model,'id_cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_documento'); ?>
		<?php echo $form->dropDownList($model,'id_documento', Documento::items(1)); ?>
		<?php echo $form->error($model,'id_documento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
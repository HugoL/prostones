<?php
/* @var $this PedidoController */
/* @var $model Pedido */
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
		<?php echo $form->label($model,'id_terminacion_arista'); ?>
		<?php echo $form->textField($model,'id_terminacion_arista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_terminacion_canto'); ?>
		<?php echo $form->textField($model,'id_terminacion_canto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_canto'); ?>
		<?php echo $form->textField($model,'id_tipo_canto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_destino'); ?>
		<?php echo $form->textField($model,'id_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cantidad'); ?>
		<?php echo $form->textField($model,'id_cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_documento'); ?>
		<?php echo $form->textField($model,'id_documento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
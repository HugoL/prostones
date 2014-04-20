<?php
/* @var $this ValorpiezaPedidoController */
/* @var $model ValorpiezaPedido */
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
		<?php echo $form->label($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_valorpiezas'); ?>
		<?php echo $form->textField($model,'id_valorpiezas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
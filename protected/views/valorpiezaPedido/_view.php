<?php
/* @var $this ValorpiezaPedidoController */
/* @var $data ValorpiezaPedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->id_presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_valorpiezas')); ?>:</b>
	<?php echo CHtml::encode($data->id_valorpiezas); ?>
	<br />


</div>
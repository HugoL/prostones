<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza')); ?>:</b>
	<?php echo CHtml::encode($data->id_pieza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tamano')); ?>:</b>
	<?php echo CHtml::encode($data->id_tamano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_terminacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_terminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_terminacion_arista')); ?>:</b>
	<?php echo CHtml::encode($data->id_terminacion_arista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_terminacion_canto')); ?>:</b>
	<?php echo CHtml::encode($data->id_terminacion_canto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_canto')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_canto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destino')); ?>:</b>
	<?php echo CHtml::encode($data->id_destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_documento')); ?>:</b>
	<?php echo CHtml::encode($data->id_documento); ?>
	<br />

	*/ ?>

</div>
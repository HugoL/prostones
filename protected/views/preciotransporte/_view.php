<?php
/* @var $this PreciotransporteController */
/* @var $data Preciotransporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_zona_destino')); ?>:</b>
	<?php echo CHtml::encode($data->id_zona_destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_zona_procedencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_zona_procedencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pale')); ?>:</b>
	<?php echo CHtml::encode($data->pale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>
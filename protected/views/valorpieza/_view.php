<?php
/* @var $this ValorpiezaController */
/* @var $data Valorpieza */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>
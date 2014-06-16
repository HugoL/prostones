<?php
/* @var $this PreciounitarioController */
/* @var $model Preciounitario */

$this->breadcrumbs=array(
	'Preciounitarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Preciounitario', 'url'=>array('index')),
	array('label'=>'Create Preciounitario', 'url'=>array('create')),
	array('label'=>'Update Preciounitario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Preciounitario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preciounitario', 'url'=>array('admin')),
);
?>

<h1>View Preciounitario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_tipo',
		'id_tamano',
		'precio',
	),
)); ?>

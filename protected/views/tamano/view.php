<?php
/* @var $this TamanoController */
/* @var $model Tamano */

$this->breadcrumbs=array(
	'Tamanos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tamano', 'url'=>array('index')),
	array('label'=>'Create Tamano', 'url'=>array('create')),
	array('label'=>'Update Tamano', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tamano', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tamano', 'url'=>array('admin')),
);
?>

<h1>View Tamano #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>

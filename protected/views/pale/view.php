<?php
/* @var $this PaleController */
/* @var $model Pale */

$this->breadcrumbs=array(
	'Pales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pale', 'url'=>array('index')),
	array('label'=>'Create Pale', 'url'=>array('create')),
	array('label'=>'Update Pale', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pale', 'url'=>array('admin')),
);
?>

<h1>View Pale #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'pesomaximo',
	),
)); ?>

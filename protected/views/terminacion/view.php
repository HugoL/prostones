<?php
/* @var $this TerminacionController */
/* @var $model Terminacion */

$this->breadcrumbs=array(
	'Terminacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Terminacion', 'url'=>array('index')),
	array('label'=>'Create Terminacion', 'url'=>array('create')),
	array('label'=>'Update Terminacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Terminacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Terminacion', 'url'=>array('admin')),
);
?>

<h1>View Terminacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>

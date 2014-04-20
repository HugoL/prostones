<?php
/* @var $this TonoController */
/* @var $model Tono */

$this->breadcrumbs=array(
	'Tonos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tono', 'url'=>array('index')),
	array('label'=>'Create Tono', 'url'=>array('create')),
	array('label'=>'Update Tono', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tono', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tono', 'url'=>array('admin')),
);
?>

<h1>View Tono #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>

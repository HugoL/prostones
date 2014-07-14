<?php
/* @var $this BiseladoController */
/* @var $model Biselado */

$this->breadcrumbs=array(
	'Biselados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Biselado', 'url'=>array('index')),
	array('label'=>'Create Biselado', 'url'=>array('create')),
	array('label'=>'Update Biselado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Biselado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Biselado', 'url'=>array('admin')),
);
?>

<h1>View Biselado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tamano',
	),
)); ?>

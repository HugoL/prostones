<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */

$this->breadcrumbs=array(
	'Valorpiezas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Valorpieza', 'url'=>array('index')),
	array('label'=>'Create Valorpieza', 'url'=>array('create')),
	array('label'=>'Update Valorpieza', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Valorpieza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Valorpieza', 'url'=>array('admin')),
);
?>

<h1>View Valorpieza #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_tipo',
		'id_pieza',
		'id_tamano',
		'id_terminacion',
		'precio',
	),
)); ?>

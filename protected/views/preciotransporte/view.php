<?php
/* @var $this PreciotransporteController */
/* @var $model Preciotransporte */

$this->breadcrumbs=array(
	'Preciotransportes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Preciotransporte', 'url'=>array('index')),
	array('label'=>'Create Preciotransporte', 'url'=>array('create')),
	array('label'=>'Update Preciotransporte', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Preciotransporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preciotransporte', 'url'=>array('admin')),
);
?>

<h1>View Preciotransporte #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_zona_destino',
		'id_zona_procedencia',
		'pale',
		'precio',
	),
)); ?>

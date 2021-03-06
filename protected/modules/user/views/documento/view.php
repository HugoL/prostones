<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'Create Documento', 'url'=>array('create')),
	array('label'=>'Update Documento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documento', 'url'=>array('admin')),
);
?>

<h1>View Documento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_tipos_documento',
		'referencia',
		'id_user',
		'fecha',
		'observaciones',
	),
)); ?>

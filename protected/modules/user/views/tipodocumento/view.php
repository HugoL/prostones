<?php
/* @var $this TipodocumentoController */
/* @var $model TipoDocumento */

$this->breadcrumbs=array(
	'Tipo Documentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoDocumento', 'url'=>array('index')),
	array('label'=>'Create TipoDocumento', 'url'=>array('create')),
	array('label'=>'Update TipoDocumento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoDocumento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoDocumento', 'url'=>array('admin')),
);
?>

<h1>View TipoDocumento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>

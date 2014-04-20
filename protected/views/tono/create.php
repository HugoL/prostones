<?php
/* @var $this TonoController */
/* @var $model Tono */

$this->breadcrumbs=array(
	'Tonos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tono', 'url'=>array('index')),
	array('label'=>'Manage Tono', 'url'=>array('admin')),
);
?>

<h1>Create Tono</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
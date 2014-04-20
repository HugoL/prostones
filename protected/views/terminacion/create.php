<?php
/* @var $this TerminacionController */
/* @var $model Terminacion */

$this->breadcrumbs=array(
	'Terminacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Terminacion', 'url'=>array('index')),
	array('label'=>'Manage Terminacion', 'url'=>array('admin')),
);
?>

<h1>Create Terminacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
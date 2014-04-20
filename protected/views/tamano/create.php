<?php
/* @var $this TamanoController */
/* @var $model Tamano */

$this->breadcrumbs=array(
	'Tamanos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tamano', 'url'=>array('index')),
	array('label'=>'Manage Tamano', 'url'=>array('admin')),
);
?>

<h1>Create Tamano</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
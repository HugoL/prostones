<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */

$this->breadcrumbs=array(
	'Valorpiezas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Valorpieza', 'url'=>array('index')),
	array('label'=>'Manage Valorpieza', 'url'=>array('admin')),
);
?>

<h1>Create Valorpieza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
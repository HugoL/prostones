<?php
/* @var $this PaleController */
/* @var $model Pale */

$this->breadcrumbs=array(
	'Pales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pale', 'url'=>array('index')),
	array('label'=>'Manage Pale', 'url'=>array('admin')),
);
?>

<h1>Create Pale</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
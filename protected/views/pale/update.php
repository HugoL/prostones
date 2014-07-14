<?php
/* @var $this PaleController */
/* @var $model Pale */

$this->breadcrumbs=array(
	'Pales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pale', 'url'=>array('index')),
	array('label'=>'Create Pale', 'url'=>array('create')),
	array('label'=>'View Pale', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pale', 'url'=>array('admin')),
);
?>

<h1>Update Pale <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
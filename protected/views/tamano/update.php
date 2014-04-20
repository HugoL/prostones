<?php
/* @var $this TamanoController */
/* @var $model Tamano */

$this->breadcrumbs=array(
	'Tamanos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tamano', 'url'=>array('index')),
	array('label'=>'Create Tamano', 'url'=>array('create')),
	array('label'=>'View Tamano', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tamano', 'url'=>array('admin')),
);
?>

<h1>Update Tamano <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TonoController */
/* @var $model Tono */

$this->breadcrumbs=array(
	'Tonos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tono', 'url'=>array('index')),
	array('label'=>'Create Tono', 'url'=>array('create')),
	array('label'=>'View Tono', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tono', 'url'=>array('admin')),
);
?>

<h1>Update Tono <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
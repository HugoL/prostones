<?php
/* @var $this TerminacionController */
/* @var $model Terminacion */

$this->breadcrumbs=array(
	'Terminacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Terminacion', 'url'=>array('index')),
	array('label'=>'Create Terminacion', 'url'=>array('create')),
	array('label'=>'View Terminacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Terminacion', 'url'=>array('admin')),
);
?>

<h1>Update Terminacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
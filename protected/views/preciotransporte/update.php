<?php
/* @var $this PreciotransporteController */
/* @var $model Preciotransporte */

$this->breadcrumbs=array(
	'Preciotransportes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preciotransporte', 'url'=>array('index')),
	array('label'=>'Create Preciotransporte', 'url'=>array('create')),
	array('label'=>'View Preciotransporte', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Preciotransporte', 'url'=>array('admin')),
);
?>

<h1>Update Preciotransporte <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
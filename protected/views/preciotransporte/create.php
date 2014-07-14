<?php
/* @var $this PreciotransporteController */
/* @var $model Preciotransporte */

$this->breadcrumbs=array(
	'Preciotransportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preciotransporte', 'url'=>array('index')),
	array('label'=>'Manage Preciotransporte', 'url'=>array('admin')),
);
?>

<h1>Create Preciotransporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
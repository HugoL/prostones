<?php
/* @var $this PreciounitarioController */
/* @var $model Preciounitario */

$this->breadcrumbs=array(
	'Preciounitarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preciounitario', 'url'=>array('index')),
	array('label'=>'Create Preciounitario', 'url'=>array('create')),
	array('label'=>'View Preciounitario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Preciounitario', 'url'=>array('admin')),
);
?>

<h1>Update Preciounitario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
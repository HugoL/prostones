<?php
/* @var $this PreciounitarioController */
/* @var $model Preciounitario */

$this->breadcrumbs=array(
	'Preciounitarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preciounitario', 'url'=>array('index')),
	array('label'=>'Manage Preciounitario', 'url'=>array('admin')),
);
?>

<h1>Create Preciounitario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BiseladoController */
/* @var $model Biselado */

$this->breadcrumbs=array(
	'Biselados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Biselado', 'url'=>array('index')),
	array('label'=>'Manage Biselado', 'url'=>array('admin')),
);
?>

<h1>Create Biselado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
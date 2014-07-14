<?php
/* @var $this BiseladoController */
/* @var $model Biselado */

$this->breadcrumbs=array(
	'Biselados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Biselado', 'url'=>array('index')),
	array('label'=>'Create Biselado', 'url'=>array('create')),
	array('label'=>'View Biselado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Biselado', 'url'=>array('admin')),
);
?>

<h1>Update Biselado <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
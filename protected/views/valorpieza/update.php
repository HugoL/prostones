<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */

$this->breadcrumbs=array(
	'Valorpiezas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Valorpieza', 'url'=>array('index')),
	array('label'=>'Create Valorpieza', 'url'=>array('create')),
	array('label'=>'View Valorpieza', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Valorpieza', 'url'=>array('admin')),
);
?>

<h1>Update Valorpieza <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
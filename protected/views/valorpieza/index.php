<?php
/* @var $this ValorpiezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Valorpiezas',
);

$this->menu=array(
	array('label'=>'Create Valorpieza', 'url'=>array('create')),
	array('label'=>'Manage Valorpieza', 'url'=>array('admin')),
);
?>

<h1>Valorpiezas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

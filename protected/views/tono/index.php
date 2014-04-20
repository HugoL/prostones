<?php
/* @var $this TonoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tonos',
);

$this->menu=array(
	array('label'=>'Create Tono', 'url'=>array('create')),
	array('label'=>'Manage Tono', 'url'=>array('admin')),
);
?>

<h1>Tonos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

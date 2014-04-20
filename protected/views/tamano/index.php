<?php
/* @var $this TamanoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tamanos',
);

$this->menu=array(
	array('label'=>'Create Tamano', 'url'=>array('create')),
	array('label'=>'Manage Tamano', 'url'=>array('admin')),
);
?>

<h1>Tamanos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

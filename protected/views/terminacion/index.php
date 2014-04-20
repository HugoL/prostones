<?php
/* @var $this TerminacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terminacions',
);

$this->menu=array(
	array('label'=>'Create Terminacion', 'url'=>array('create')),
	array('label'=>'Manage Terminacion', 'url'=>array('admin')),
);
?>

<h1>Terminacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

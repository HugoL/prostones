<?php
/* @var $this PresupuestoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presupuestos',
);

$this->menu=array(
	array('label'=>'Create Presupuesto', 'url'=>array('create')),
	array('label'=>'Manage Presupuesto', 'url'=>array('admin')),
);
?>

<h1>Presupuestos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

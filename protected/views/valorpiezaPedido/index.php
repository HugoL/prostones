<?php
/* @var $this ValorpiezaPedidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Valorpieza Pedidos',
);

$this->menu=array(
	array('label'=>'Create ValorpiezaPedido', 'url'=>array('create')),
	array('label'=>'Manage ValorpiezaPedido', 'url'=>array('admin')),
);
?>

<h1>Valorpieza Pedidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

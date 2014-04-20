<?php
/* @var $this ValorpiezaPedidoController */
/* @var $model ValorpiezaPedido */

$this->breadcrumbs=array(
	'Valorpieza Pedidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ValorpiezaPedido', 'url'=>array('index')),
	array('label'=>'Manage ValorpiezaPedido', 'url'=>array('admin')),
);
?>

<h1>Create ValorpiezaPedido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
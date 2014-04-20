<?php
/* @var $this ValorpiezaPedidoController */
/* @var $model ValorpiezaPedido */

$this->breadcrumbs=array(
	'Valorpieza Pedidos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ValorpiezaPedido', 'url'=>array('index')),
	array('label'=>'Create ValorpiezaPedido', 'url'=>array('create')),
	array('label'=>'Update ValorpiezaPedido', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ValorpiezaPedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ValorpiezaPedido', 'url'=>array('admin')),
);
?>

<h1>View ValorpiezaPedido #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_pedido',
		'id_valorpiezas',
	),
)); ?>

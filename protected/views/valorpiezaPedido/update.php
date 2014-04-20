<?php
/* @var $this ValorpiezaPedidoController */
/* @var $model ValorpiezaPedido */

$this->breadcrumbs=array(
	'Valorpieza Pedidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ValorpiezaPedido', 'url'=>array('index')),
	array('label'=>'Create ValorpiezaPedido', 'url'=>array('create')),
	array('label'=>'View ValorpiezaPedido', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ValorpiezaPedido', 'url'=>array('admin')),
);
?>

<h1>Update ValorpiezaPedido <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this ValorpiezaController */
/* @var $model Valorpieza */

$this->breadcrumbs=array(
	'Valorpiezas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Valorpieza', 'url'=>array('index')),
	array('label'=>'Create Valorpieza', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#valorpieza-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Valorpiezas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'valorpieza-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_tipo',
		'id_pieza',
		'id_tamano',
		'id_terminacion',
		'precio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

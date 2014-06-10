<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider 

$this->breadcrumbs=array(
	'Materiales',
);
*/
/*$this->menu=array(
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);*/
?>

<h1>Catálogo de materiales</h1>




	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 
	?>

<div class="clearfix">&nbsp;</div>
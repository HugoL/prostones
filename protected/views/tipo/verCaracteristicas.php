
<h1>Caracterist</h1>



<?php foreach ($tipos as $key => $tipo):	 ?>

	<div class="span2">

	<?php echo $tipo->nombre; ?>

<img style="width:200px; height:200px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->imagen; ?>"/>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    	'label'=>'Ver carac',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('tipo/verTiposMaterial/id/'.$tipo->id),
	)); ?>
	</div>

<?php endforeach; ?>
<div class="clearfix">&nbsp</div>


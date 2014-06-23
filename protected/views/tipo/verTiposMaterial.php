

<h1>Catálogo de materiales <?php echo $material->nombre?></h1>  
<?php $this->debug($tipos); ?>

<?php foreach ($tipos as $key => $tipo):	 ?>

	<div class="span2">

	<?php echo $tipo->nombre; ?>
<a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id; ?>">

<img style="width:200px; height:200px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->imagen; ?>"/>
</a>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    	'label'=>'Ver carac',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('tipo/verCaracteristicas/id/'.$tipo->id),
	)); ?>
	</div>

<?php endforeach; ?>
<div class="clearfix">&nbsp</div>


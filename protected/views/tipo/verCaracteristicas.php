
<h1>Caracteristicas de <?php echo $tipo->nombre; ?></h1>





	<div class="span6">

	<?php echo $tipo->nombre; ?>
<?php echo $tipo->imagen; ?>
<?php echo $tipo->descripcion; ?>
<img style="width:200px; height:200px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->imagen; ?>"/>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    	'label'=>'Ver carac',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('tipo/verTiposMaterial/id/'.$tipo->id),
	)); ?>
	</div>


<div class="clearfix">&nbsp</div>



<h1><?php echo $tipo->nombre; ?>.<font style="font-size:12px; color:grey;"> Características.</font></h1> 





	<div class="span8">
<div class="span12">
<div class="span4">
<img style="width:200px; height:200px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->imagen; ?>"/>
<br>
<?php echo $tipo->nombre; ?><br>
Procedencia: <?php echo $tipo->procedencia; ?><br>

Masa volumica: <?php echo $tipo->masa_volumica; ?> g/cm<sup>3</sup><br>
Coeficiente de absorción: <?php echo $tipo->absorcion; ?> %<br>
Res. a a la compresión: <?php echo $tipo->compresion; ?> Mpa<br>
Res. a la flexión: <?php echo $tipo->flexion; ?> Mpa<br>
Res. al desgaste: <?php echo $tipo->desgaste; ?> mm.<br>
Res. al impacto: <?php echo $tipo->impacto; ?> cm.<br>
	</div>
<div class="span6">
<?php echo $tipo->descripcion; ?>
<br>

PRECIO:  € m<sup>2</sup>
<br>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    	'label'=>'ver en el simulador',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('simulador/index/'.$tipo->id),
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
    	'label'=>'Pedir',
    	'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('presupuesto/'.$tipo->id),
	)); ?>
</div>
</div>



	</div>
<div class="span3">
<h1>Materiales</h1>
Lista de materiales para seleccionar
</div>

<div class="clearfix">&nbsp</div>


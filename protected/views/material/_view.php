<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view">
	<div class="textura"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$data->imagen; ?>"/></a></div>
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />
<?php /*foreach ($data->tipo as $key => $value) {
	echo $value->id."<br/>";
}*/ ?>

</div>
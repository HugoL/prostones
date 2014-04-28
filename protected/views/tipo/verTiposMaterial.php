
<h1>Ver Tipos de Material</h1>

<?php $this->debug(Yii::app()->theme); ?>

<?php foreach ($tipos as $key => $tipo):	 ?>

	<div class="well well-small"><?php echo $tipo->nombre; ?></div>
<?php endforeach; ?>

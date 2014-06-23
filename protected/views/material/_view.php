<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view well span12">
	<div class="textura span4">
		<a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verTiposMaterial/id/".$data->id; ?>">
			<img class="imgmaterial"style="width:200px; height:100px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$data->imagen; ?>"/></a>
		</div>
		<div class="span8"><h3><?php echo CHtml::encode($data->nombre); ?></h3>

			<div class="clearfix">&nbsp;</div>

			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'label'=>'Ver Tipos',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('tipo/verTiposMaterial/id/'.$data->id),
    	)); ?>

    </div>


</div>

<div class="clearfix">&nbsp;</div>
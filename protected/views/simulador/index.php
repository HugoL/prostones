<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Simulador 3D',
);*/

/*$this->menu=array(
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);*/
?>

<h1>Diseñador virtual</h1>


<div class="span8">
    <div class="span12">
    
        <div class="span3">
        <div class="span12 well">
           Escenarios.
            <br>
           - Portal<br>
           - Escalera<br>
           - Habitación
</div>
qwe wq qw qff eoefjwefjwoefjwe wg wgww gowgo wodjdog gogr g gorer rg egre odd d sdfojgr h lfjfg h e ffg g re ge 
               <img style="width:200px; height:280px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->textura; ?>"/>
        </div>
          <div class="span3" style="text-align:right">
           
            <br>

            <?php echo $tipo->nombre; ?><br>
            Procedencia: <?php echo $tipo->procedencia; ?><br>
            Precio:

            <br>
            
        </div>
        <div class="span6">

         <img style="width:80%; height:80%;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->textura; ?>"/>
           
            <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'ver info del material',
        'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('tipo/verCaracteristicas/id/'.$tipo->id),
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
    <h3 style="font-size:15px;">Mármoles</h3>
    <div class="span12 galemat">
<div class="clearfix"></div>

        <?php foreach ($tipos as $key => $tipo):     ?>
            <div class="span2 ">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/simulador/index/id/".$tipo->id?>">

                    <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

<h3 style="font-size:15px;">Granitos</h3>
    <div class="span12 galemat">
    <div class="clearfix"></div>
     <?php foreach ($tipos2 as $key => $tipo):     ?>
            <div class="span2">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/simulador/index/id/".$tipo->id?>">

                    <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>

    </div>

</div>



<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>
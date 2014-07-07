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
           Escenarios
            <br><br>
          <strong><span class="dot">•</span> Portal</strong><br>
           <span class="dot">•</span> Escalera (prox.)<br>
           <span class="dot">•</span> Habitación (prox.)
</div>
               <img style="width:150px; height:210px; border:1px solid black;margin-left:20px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/render/base.jpg"/>
               <font size="1" style="margin-left:50px;">Boceto sin material</font>
        </div>
          <div class="span3" style="text-align:right">
           
            <br>

           <font size="3"> <strong><?php echo $tipo->nombre; ?></strong></font><br>
            <div style="margin-top:250px;">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'info del material',
        'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('tipo/verCaracteristicas/id/'.$tipo->id),
       )); ?>
<div class="clearfix">&nbsp;</div>  
            <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'Comparar materiales',
        'type'=>'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('presupuesto/'.$tipo->id),
       )); ?>
<div class="clearfix">&nbsp;</div>  
 <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'Pedir presupuesto',
        'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('presupuesto/'.$tipo->id),
       )); ?>
</div>
            <br>
            
        </div>
        <div class="span6">

         <img style="width:80%; height:80%; border:1px solid black" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->textura; ?>"/>
           

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
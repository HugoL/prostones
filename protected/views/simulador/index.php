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


$this->pageTitle= 'Diseñador. Portal  en '. $tipo->nombre .' - '. Yii::app()->name;
?>


<h1>Diseñador virtual</h1>


<div class="span8">
  <div class="span12">
    <div class="span3 menusimulador">

        <div class="span12 well ">
          Escenarios
          <br><br>
          <strong><span class="dot">•</span> Portal</strong><br>
          <span class="dot">•</span> Escalera (prox.)<br>
          <span class="dot">•</span> Habitación (prox.)
        </div>

            <figure>
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/render/base.jpg"/>
            <figcaption>Boceto sin material</figcaption>
             </figure>
    </div>

    <div class="span3 textosimulador">
      <br>
      <font size="3"> <strong><?php echo $tipo->nombre; ?></strong></font><br>
      
      <div id="botonsimulador">
         <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'info del material',
        'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('tipo/verCaracteristicas/id/'.$tipo->id),
       )); ?>

        <div class="clearfix">&nbsp;</div>  
        <?php $this->widget('bootstrap.widgets.TbButton', array(
               'label'=>'Pedir presupuesto',
        'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // null, 'large', 'small' or 'mini'
        'url'=>array('presupuesto/'),
       )); ?>
      </div>
            <br>
            
    </div>

    <div class="span6"> 
    <figure> 
    <img  alt="<?php echo $tipo->nombre; ?> - proSton.es" width="80%" height="80%" style="border:1px solid black;"  id="zoom_01" src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->textura; ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/<?php echo $tipo->textura; ?>"/>
    <figcaption ><font size="1">* Pase el ratón para hacer zoom en la imágen.</font></figcaption>
    </figure>
    </div>
      
  </div>
</div>




<div class="span3 galsimulador">
    <h3>Mármoles</h3>
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

<h3>Granitos</h3>
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

    <script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750

   }); 
</script>
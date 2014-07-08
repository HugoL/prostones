<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Catálogo';
?>

<h1><?php echo $tipo->nombre; ?>.<font style="font-size:12px; color:grey;"> </font></h1> 





<div class="span8">
    <div class="span12">
        <div class="span4" >
          



<img style="border:1px solid black; width:200px; height:250px;"  id="zoom_01" src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>"/>

<br />







            <br>
            <strong>Características</strong> <br>
          

            Masa volumica: <?php echo $tipo->masa_volumica; ?> g/cm<sup>3</sup><br>
            Coeficiente de absorción: <?php echo $tipo->absorcion; ?> %<br>
            Res. a a la compresión: <?php echo $tipo->compresion; ?> Mpa<br>
            Res. a la flexión: <?php echo $tipo->flexion; ?> Mpa<br>
            Res. al desgaste: <?php echo $tipo->desgaste; ?> mm.<br>
            Res. al impacto: <?php echo $tipo->impacto; ?> cm.<br>
        </div>
        <div class="span7">
            <div class="span12" >
               <p align="justify"> <?php echo $tipo->descripcion; ?></p>
                <br>

                PRECIO:  € m<sup>2</sup>
                <br>
            </div>

            <div class="span12 imgacabados">
           
            Acabados:<br>
            <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado1;?>" class="jqzoom"   title="triumph" >
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado1;?>"  title="triumph" >
        </a>
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/<?php echo $tipo->acabado2; ?>"/>
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/<?php echo $tipo->acabado3; ?>"/>



        </div>





        <?php $this->widget('bootstrap.widgets.TbButton', array(
         'label'=>'ver en el simulador',
    	'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    	'size'=>'mini', // null, 'large', 'small' or 'mini'
    	'url'=>array('simulador/index/id/'.$tipo->id),
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
    <h3 style="font-size:15px;">Marmoles</h3>
    <div class="span12 galemat">
        <div class="clearfix"></div>

        <?php foreach ($tipos as $key => $tipo):     ?>
            <div class="span2">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

                    <img style="width:50px; height:50px;" alt="<?php echo $tipo->nombre ?> - proSton.es" title="<?php echo $tipo->nombre ?>" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <h3 style="font-size:15px;">Granitos</h3>
    <div class="span12 galemat">
        <div class="clearfix"></div>
        <?php foreach ($tipos2 as $key => $tipo):     ?>
            <div class="span2">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

                    <img style="width:50px; height:50px;" alt="<?php echo $tipo->nombre ?> - proSton.es"  title="<?php echo $tipo->nombre ?>"src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
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


<script type="text/javascript">
$(document).ready(function() {
    $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false,
            zoomWidth: 300,
            zoomHeight: 200,
            xOffset:90,
            yOffset:100,
            position:'top'
        });
    //$('.jqzoom').jqzoom();
});


</script>
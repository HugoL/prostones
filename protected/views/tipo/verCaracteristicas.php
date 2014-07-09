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

<script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750

   }); 
</script>








            <br>
            <strong>Características</strong> <br>
          
            <table>
                <tr>
                    <td><font size="1">Masa volumica:</strong></td>
                    <td><?php echo $tipo->masa_volumica; ?> g/cm<sup>3</sup></td>
                </tr>
                <tr>
                    <td>Coeficiente absorción:</td>
                    <td><?php echo $tipo->absorcion; ?> %</td>
                </tr>
                <tr>
                    <td>R. a la compresión: </td>
                    <td><?php echo $tipo->compresion; ?> Mpa</td>
                </tr>
                <tr>
                    <td>R. a la flexión: </td>
                    <td><?php echo $tipo->flexion; ?> Mpa</td>
                </tr>
                <tr>
                    <td>R. al desgaste: </td>
                    <td><?php echo $tipo->desgaste; ?> mm.</td>
                </tr>
                <tr>
                    <td>R. al impacto:</td>
                    <td> <?php echo $tipo->impacto; ?> cm.</td>
                </tr>

            </table>
            
        </div>
        <div class="span7">
            <div class="span12" >
               <p align="justify"> <?php echo $tipo->descripcion; ?></p>
                <br>

                Tabla precios con medidas  € m<sup>2</sup>
                <br>
            </div>

            
           <div class="span12 imgacabados" id="content" >
            Acabados:<br>
            
 
               
              <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado1;?>" rel="zoom-position: top; zoom-height: 300px;zoom-width:500px; zoom-fade: true; zoom-fade-in-speed: 1000; zoom-fade-out-speed: 500; smoothing-speed: 10"  title="acabado1" class="MagicZoom"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado1;?>"/></a>
           <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado2;?>" title="Cool bike!" class="MagicZoom"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado2;?>"/></a>
          

       <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado3;?>" title="Cool bike!" class="MagicZoom"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado3;?>"/></a>
        
      
       
    

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

 
    
       
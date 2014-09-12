<?php
/* @var $this SiteController */

$this->pageTitle= 'Catálogo - '. $tipo->nombre .' - '. Yii::app()->name . 'Marmolistas';

Yii::app()->clientScript->registerMetaTag("Catálogo de materiales. " . $tipo->nombre . " en detalle. Características, rendimiento, tarifas. ", 'description');
Yii::app()->clientScript->registerMetaTag("Catálogo,  Marmol , Granito ," .$tipo->nombre ." Barato, Precio, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Granito proston,  Marmolistas", 'keywords');

?>

<h1><?php echo $tipo->nombre; ?>.</h1> 





<div class="span8 caracteristicas">
    <div class="span12">
        <div class="span3" >
          


        <figure>
        <img  alt="<?php echo $tipo->nombre; ?> - proSton.es" width="200px" height="300px"  id="zoom_01" src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/med/<?php echo $tipo->imagen; ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>"/>
        </figure>
        <br>






            
            <h2>Características</h2>
       
                 
            <table>
                <tr>
                    <td id="etiqueta" colspan="2"  align="center">Masa volúmica:</td>
                    <td id="datoresaltado" align="center"><?php echo $tipo->masa_volumica; ?></td>
                    <td id="etiqueta">g/cm<sup>3</sup></td>
                </tr>
               
                <tr  >
                    <td id="etiqueta"  colspan="2" align="center">Coeficiente absorción:</td>
                    <td id="datoresaltado"  align="center"><?php echo $tipo->absorcion; ?></td>
                    <td id="etiqueta">%</td>
                </tr>
                <tr >
                    <td id="etiqueta"colspan="2" align="center">Resistencia a compresión: </td>
                    <td id="datoresaltado"  align="center"><?php echo $tipo->compresion; ?></td>
                    <td id="etiqueta">Mpa</td>
                </tr>
                <tr>
                    <td id="etiqueta"colspan="2" align="center">Resistencia a la flexión: </td>
                    <td id="datoresaltado"  align="center"><?php echo $tipo->flexion; ?></td>
                    <td id="etiqueta">Mpa</td>
                </tr>
                <tr>
                    <td id="etiqueta" colspan="2" align="center">Resistencia al desgaste</td>
                    <td id="datoresaltado"  align="center"><?php echo $tipo->desgaste; ?></td>
                    <td id="etiqueta">mm.</td>
                </tr>
                <tr>
                    <td id="etiqueta" colspan="2" align="center">Resistencia al impacto:</td>
                    <td id="datoresaltado"  align="center"> <?php echo $tipo->impacto; ?></td>
                    <td id="etiqueta">cm.</td>
                </tr>

            </table>
            
        </div>
        <div class="span8 tarifas">
            <div class="span12" >
               <p align="justify"> <?php echo $tipo->descripcion; ?></p>
                
               <strong>Tarifas </strong>(Los materiales son en bruto y sus precios no incluyen el IVA)<br>
               <table >
               
               <tr>
               <td >Tamaño:</td>
               

             <?php foreach ($preciosunitarios as $key => $preciounitario):?>
            
                <?php if( $preciounitario->tamano->id_pieza == 1 ){?>
            <td align="center" id="datoresaltado">

                 <?php echo $preciounitario->tamano->nombre; ?></td>
                <?php } ?>
             
            
        <?php endforeach; ?>
            

            <?php foreach ($preciosunitarios as $key => $preciounitario):?>
           
                <?php if( $preciounitario->tamano->id_pieza == 2 ){?>
            <td align="center" id="datoresaltado">

                 <?php echo $preciounitario->tamano->nombre; ?></td>
                <?php } ?>
             
           
        <?php endforeach; ?>
               </tr>

               <tr>
               
               <td>Precio:</td>

                <?php foreach ($preciosunitarios as $key => $preciounitario):  ?>
            <!--<div class="span2">-->
            <td  align="center" id="etiquetazul">
                 <?php echo $preciounitario->precio ?>
                           
                <?php if( $preciounitario->tamano->id_pieza == 1 ){
                echo "<span id='black'>€ m<sup>2</sup>.</span>";
            }else{
                echo "<span id='black'>€ m.</span>";
            }  ?> 
   

               </td>
            <!--</div>-->
        <?php endforeach; ?>
        </tr>
</table>
                
                <br>
            </div>
<strong>Rendimiento del material: </strong>
            <div class="span12 utilizaciones">
                
                <table >
                    <tr>
                        <th align="center" >Pavimiento exterior</th>
                        <th align="center" >Pavimiento interior</th>
                        <th align="center" >Transito bajo</th>
                        <th align="center" >Transito medio</th>
                        <th align="center">Transito intenso</th>
                        <th align="center" >Revestimiento interior</th>
                        <th>Revestimiento exterior</th>
                    </tr>
                    <tr id="datos">
                        <td><?php echo $tipo->pavimento_exterior; ?></td>
                        <td><?php echo $tipo->pavimento_interior; ?></td>
                        <td><?php echo $tipo->transito_bajo; ?></td>
                        <td><?php echo $tipo->transito_medio; ?></td>
                        <td><?php echo $tipo->transito_intenso; ?></td>
                        <td><?php echo $tipo->revestimiento_interior; ?></td>
                        <td><?php echo $tipo->revestimiento_exterior; ?></td>
                    

                    </tr>
                </table>

                
                
                
                
                
                
                



            </div>

        <!--  <strong> Acabados</strong><br> 
           <div class="span12 imgacabados" id="content" >
            
            
 
               
              <a href="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php // echo $tipo->acabado1;?>" rel="zoom-position: top; zoom-height: 300px;zoom-width:500px; zoom-fade: true; zoom-fade-in-speed: 1000; zoom-fade-out-speed: 500; smoothing-speed: 10"  title="acabado 1" class="MagicZoom"><img   src="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php //echo $tipo->acabado1;?>" alt="Acabado 1 de <?php // echo  $tipo->nombre; ?> - proSton.es"/></a>

<a href="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php // echo  $tipo->acabado2;?>" rel="zoom-position: top; zoom-height: 300px;zoom-width:500px; zoom-fade: true; zoom-fade-in-speed: 1000; zoom-fade-out-speed: 500; smoothing-speed: 10"  title="acabado 2" class="MagicZoom"><img src="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php // echo $tipo->acabado2;?>" alt="Acabado 2 de <?php // echo $tipo->nombre; ?> - proSton.es"/></a>

          

       <a href="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php  // echo  $tipo->acabado3;?>" title="acabado 3" class="MagicZoom"><img src="<?php // echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php // echo $tipo->acabado3;?>" alt="Acabado 1 de <?php // echo $tipo->nombre; ?> - proSton.es"/></a>
        
      
       
    

        </div>-->

 </div>
</div>

</div>





<div class="span3 menumat">
    <h3>Mármoles</h3>
    <div class="span12 galemat">
<div class="clearfix"></div>

        <?php foreach ($tipos as $key => $tipo):     ?>
            <div class="span2 ">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

                    <img  alt="<?php echo $tipo->nombre; ?> - www.proston.es" title=" <?php echo $tipo->nombre; ?>" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

<h3>Granitos</h3>
    <div class="span12 galemat">
    <div class="clearfix"></div>
     <?php foreach ($tipos2 as $key => $tipo):     ?>
            <div class="span2">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

                    <img alt="<?php echo $tipo->nombre; ?> - www.proston.es" title=" <?php echo $tipo->nombre; ?>" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
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
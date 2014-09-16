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
                
               <p><strong>• Tarifas: </strong><span id="textodiez">(Los materiales son en bruto y sus precios no incluyen el IVA.)</span></p>
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
            <p><strong>• Recomendaciones de uso: </strong> <span id="textodiez">(Dependiendo del lugar donde se desea colocar.)</span></p>
            <div class="span12 utilizaciones">
                
                <table >
                    <tr id="titulo">
                        <th align="center" >Pavimiento exterior</th>
                        <th align="center" >Pavimiento interior</th>
                        <th align="center" >Transito bajo</th>
                        <th align="center" >Transito medio</th>
                        <th align="center">Transito intenso</th>
                        <th align="center" >Revestimiento interior</th>
                        <th>Revestimiento exterior</th>
                        <th>Encimeras</th>
                    </tr>
                    <tr id="datos">
                        <td>
                        <img  alt="pavimiento exterior - www.proston.es" width="80px" height="18x"  title="<?php echo $tipo->pavimento_exterior; ?>/5" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->pavimento_exterior; ?>.png">

                        </td>
                        <td>
                        <img  alt="Pavimiento interior - www.proston.es" width="80px" height="18px" title="<?php echo $tipo->pavimento_interior; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->pavimento_interior; ?>.png">

                        </td>

                         <td>
                        <img  alt="Transito bajo - www.proston.es" width="80px" height="18px" title="<?php echo $tipo->transito_bajo; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_bajo; ?>.png">

                        </td>
                        <td>
                        <img  alt="Transito medio - www.proston.es" width="80px" height="18px"  title="<?php echo $tipo->transito_medio; ?>/5" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_medio; ?>.png">

                        </td>
                          <td>
                        <img  alt="Transito intenso - www.proston.es" width="80px" height="18px" title="<?php echo $tipo->transito_intenso; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_intenso; ?>.png">

                        </td>
                         <td>
                        <img  alt="Revestimiento_interior - www.proston.es" width="80px" height="18px" title="<?php echo $tipo->revestimiento_interior; ?>/5"   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->revestimiento_interior; ?>.png">

                        </td>

                        <td>
                        <img  alt="Revestimiento exterior - www.proston.es" width="80px" height="18px"  title="<?php echo $tipo->revestimiento_exterior; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->revestimiento_exterior; ?>.png">

                        </td>
                        <td>
                        <img  alt="Emcimeras - www.proston.es" width="80px" height="18px"  title="<?php echo $tipo->encimeras; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->encimeras; ?>.png">

                        </td>
                        
                        
                    

                    </tr>
                </table>

             
                
                
                
                
                
                


<div class="clearfix">&nbsp</div>

            </div>

<p><br><strong>• Variaciones de tono: </strong> <span id="textodiez">(Propias de la naturaleza del material.)</span></p>  
 
            <div class="span5"> 
                <table id="variacion">
                   

                    <?php if ($tipo->variacion == 3 ){ ?>
                    <tr>
                        <td>
                            Uniforme 
                        </td>
                        <td>
                             Ligero 
                        </td>
                        <td id="selecvariacion">
                              Moderado
                        </td>
                        </tr>
                    <?php } elseif ($tipo->variacion == 2) {?>
                        <tr>
                         <td>
                            Uniforme 
                        </td>
                        <td id="selecvariacion">
                             Ligero 
                        </td>
                        <td>
                              Moderado
                        </td>
                        </tr>
                    <?php }else{ ?>
                         <tr>
                         <td id="selecvariacion">
                            Uniforme 
                        </td>
                        <td>
                             Ligero 
                        </td>
                        <td>
                              Moderado
                        </td>
                        </tr>
                    <?php } ?>
                     
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
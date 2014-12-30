<?php
/* @var $this SiteController */

$this->pageTitle= 'Catálogo - '. $tipo->material->nombre .' '. $tipo->nombre .' - '. Yii::app()->name ;

Yii::app()->clientScript->registerMetaTag("Catálogo de materiales. " . $tipo->nombre . " en detalle. Características, rendimiento, tarifas. ", 'description');
Yii::app()->clientScript->registerMetaTag("Catálogo,  Marmol , Granito ," .$tipo->nombre ." Barato, Precio, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Granito proston,  Marmolistas", 'keywords');

?>

<h1  id="tituloseccion"><?php echo $tipo->nombre; ?>.</h1> 


<div class="span8 caracteristicas">
    <div class="span12">
        <div class="span3" >
           <figure>
            <img  alt="<?php echo $tipo->nombre; ?> - proSton.es"   id="zoom_01" src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/med/<?php echo $tipo->imagen; ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>"/>
            </figure>
            <br>
  
        </div>
        <div class="span8 tarifas">
            <div class="span12">
                <p id="textomaterial"> <?php echo $tipo->descripcion; ?></p>
            </div>
            <div class="span12">
                
                <span class="texto10naranja">ESPECIFICACIONES TÉCNICAS</span></p>  

                    <table>
                        <tr>
                            <td  width="20%" class="etiqueta">Masa volúmica:</td>
                            <td class="datoresaltado"><?php echo $tipo->masa_volumica; ?></td>
                            <td class="etiqueta2">g/cm<sup>3</sup></td>
                      
                            <td width="20%" class="etiqueta">Resistencia a la flexión: </td>
                            <td class="datoresaltado"><?php echo $tipo->flexion; ?></td>
                            <td class="etiqueta2">Mpa</td>
                      
                            <td width="22%" class="etiqueta">Resistencia a compresión: </td>
                            <td class="datoresaltado"><?php echo $tipo->compresion; ?></td>
                            <td class="etiqueta2">Mpa</td>
                        </tr>
                        <tr>
                            <td class="etiqueta">Coeficiente absorción:</td>
                            <td class="datoresaltado"><?php echo $tipo->absorcion; ?></td>
                            <td class="etiqueta2">%</td>
                            
                       
                            <td class="etiqueta">Resistencia al desgaste</td>
                            <td class="datoresaltado"><?php echo $tipo->desgaste; ?></td>
                            <td class="etiqueta2">mm.</td>
                      
                            <td class="etiqueta">Resistencia al impacto:</td>
                            <td class="datoresaltado"> <?php echo $tipo->impacto; ?></td>
                            <td class="etiqueta2">cm.</td>
                        </tr>

                    </table>
                    <br>
            </div>
               
            <div class="span12">
                    <p><span class="texto10naranja">VARIACIONES DE TONO</span> </p>  
                    <div class="span10"> 
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
                        <br>
                    </div> 
            </div>
            

            
            <div class="span12 utilizaciones">
                <p><span class="texto10naranja">RECOMENDACIONES DE USO</span></p>
                <table >
                    <tr id="titulo">
                        <th>Pavimiento exterior</th>
                        <th>Pavimiento interior</th>
                        <th>Tránsito bajo</th>
                        <th>Tránsito medio</th>
                        <th>Tránsito intenso</th>
                        <th>Revestimiento interior</th>
                        <th>Revestimiento exterior</th>
                        <th>Encimeras</th>
                    </tr>
                    <tr id="datos"><!--<span style="color:yellow">★</span><span style="color:#770">★</span>-->
                        <td>
                        <img  alt="pavimiento exterior - www.proston.es" width="60" height="16"  title="<?php echo $tipo->pavimento_exterior; ?>/5" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->pavimento_exterior; ?>.png">

                        </td>
                        <td>
                        <img  alt="Pavimiento interior - www.proston.es" width="60" height="16" title="<?php echo $tipo->pavimento_interior; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->pavimento_interior; ?>.png">

                        </td>

                         <td>
                        <img  alt="Transito bajo - www.proston.es" width="60" height="16" title="<?php echo $tipo->transito_bajo; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_bajo; ?>.png">

                        </td>
                        <td>
                        <img  alt="Transito medio - www.proston.es" width="60" height="16"  title="<?php echo $tipo->transito_medio; ?>/5" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_medio; ?>.png">

                        </td>
                          <td>
                        <img  alt="Transito intenso - www.proston.es" width="60" height="16" title="<?php echo $tipo->transito_intenso; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->transito_intenso; ?>.png">

                        </td>
                         <td>
                        <img  alt="Revestimiento_interior - www.proston.es" width="60" height="16" title="<?php echo $tipo->revestimiento_interior; ?>/5"   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->revestimiento_interior; ?>.png">

                        </td>

                        <td>
                        <img  alt="Revestimiento exterior - www.proston.es" width="60" height="16"  title="<?php echo $tipo->revestimiento_exterior; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->revestimiento_exterior; ?>.png">

                        </td>
                        <td>
                        <img  alt="Emcimeras - www.proston.es" width="60" height="16"  title="<?php echo $tipo->encimeras; ?>/5"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/<?php echo $tipo->encimeras; ?>.png">

                        </td>
                        
                        
                    

                    </tr>
                </table>

             
                
                
                
                
                
                


<div class="clearfix">&nbsp;</div>

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
                <a href="<?php echo Yii::app()->request->baseUrl."/catalogo/marmol/".$tipo->nombreURL?>">

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
                <a href="<?php echo Yii::app()->request->baseUrl."/catalogo/granito/".$tipo->nombreURL?>">

                    <img alt="<?php echo $tipo->nombre; ?> - www.proston.es" title=" <?php echo $tipo->nombre; ?>" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/<?php echo $tipo->imagen; ?>"/>
                </a>
            </div>
        <?php endforeach; ?>

    </div>

</div>



<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>





 
    
       <script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750

   }); 
</script>
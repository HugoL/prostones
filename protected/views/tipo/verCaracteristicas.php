<?php
/* @var $this SiteController */

$this->pageTitle= 'Catálogo - '. $tipo->nombre .' - '. Yii::app()->name;
?>

<h1><?php echo $tipo->nombre; ?>.<font style="font-size:12px; color:grey;"> </font></h1> 





<div class="span8">
    <div class="span12">
        <div class="span3" >
          


<figure>
<img  alt="<?php echo $tipo->nombre; ?> - proSton.es" style="border:1px solid black; width:200px; height:230px;"  id="zoom_01" src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/large/<?php echo $tipo->imagen; ?>"/>
</figure>
<br />






            <br><br>
            <strong>Características</strong> <br>
       
</table>
          
            <table  style=" border-collapse:separate;
    border-spacing:0px 3px; ">
                            <tr  >
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Masa volúmica:</font></td>
                    <td style="border:1px solid #8f8c8c;" align="center"><font style=" font-size: 12px;" ><?php echo $tipo->masa_volumica; ?></font> </td>
                    <td bgcolor="#e8e8e8"><font size="1" >g/cm<sup>3</sup></font></td>
                </tr>
               
                <tr  >
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Coeficiente absorción:</font></td>
                    <td style="border:1px solid #8f8c8c;"  align="center"><font style=" font-size: 12px;" ><?php echo $tipo->absorcion; ?></font> </td>
                    <td bgcolor="#e8e8e8"><font style=" font-size: 10px;" >%</font></td>
                </tr>
                <tr >
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Resistencia a compresión: </font></td>
                    <td style="border:1px solid #8f8c8c;"  align="center"><font style=" font-size: 12px;" ><?php echo $tipo->compresion; ?></font></td>
                    <td bgcolor="#e8e8e8"><font style=" font-size: 10px;" >Mpa</font></td>
                </tr>
                <tr>
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Resistencia a la flexión:</font> </td>
                    <td style="border:1px solid #8f8c8c;"  align="center"><font style=" font-size: 12px;" ><?php echo $tipo->flexion; ?></font></td>
                    <td bgcolor="#e8e8e8"><font style=" font-size: 10px;" >Mpa</font></td>
                </tr>
                <tr>
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Resistencia al desgaste</font></td>
                    <td style="border:1px solid #8f8c8c;"  align="center"><font style=" font-size: 12px;" ><?php echo $tipo->desgaste; ?></font></td>
                    <td bgcolor="#e8e8e8"><font style=" font-size: 10px;" >mm.</font></td>
                </tr>
                <tr>
                    <td bgcolor="#e8e8e8"  align="center"><font style=" font-size: 10px;" >Resistencia al impacto:</font></td>
                    <td style="border:1px solid #8f8c8c;"  align="center"><font style=" font-size: 12px;" > <?php echo $tipo->impacto; ?></font></td>
                    <td bgcolor="#e8e8e8"><font style=" font-size: 10px;" >cm.</font></td>
                </tr>

            </table>
            
        </div>
        <div class="span8" style="margin-left:40px;">
            <div class="span12" >
               <p align="justify"> <?php echo $tipo->descripcion; ?></p>
                
               <strong>Tarifas </strong><font style=" font-size: 10px;" >(Los materiales son en bruto y sus precios no incluyen el IVA)</font><br>
               <table style=" border-collapse:separate;
    border-spacing:3px 0px;">
               <tr>
               <td ><font style=" font-size: 10px;" >Tamaño:</font></td>
               

             <?php foreach ($preciosunitarios as $key => $preciounitario):     ?>
            <!--<div class="span2">-->
            <td align="center" style="border:1px solid #8f8c8c;">
                 <?php echo $preciounitario->tamano->nombre; ?></td>

             
            <!--</div>-->
        <?php endforeach; ?>

               </tr>
               <tr>
               <td><font style=" font-size: 10px;" >Precio:</font></td>

                <?php foreach ($preciosunitarios as $key => $preciounitario):     ?>
            <!--<div class="span2">-->
            <td  align="center" bgcolor="#e8e8e8" style="border-bottom:1px solid #c4c4c4;"><strong style="color:#125171;">
                 <?php echo $preciounitario->precio ?></strong> 
            <font style=" font-size: 9px;" >   
                <?php echo $this->debug($preciosunitarios);?>
                <?php if( $preciounitario->tamano->id_pieza == 1 ){
                echo "€ m<sup>2</sup>.";
            }else{
                echo "€ m.";
            }  ?> .<br>
   

               </font></td>
            <!--</div>-->
        <?php endforeach; ?>
        </tr>
</table>
                
                <br>
            </div>

          <strong> Acabados</strong><br> 
           <div class="span12 imgacabados" id="content" >
            
            
 
               
              <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado1;?>" rel="zoom-position: top; zoom-height: 300px;zoom-width:500px; zoom-fade: true; zoom-fade-in-speed: 1000; zoom-fade-out-speed: 500; smoothing-speed: 10"  title="acabado 1" class="MagicZoom"><img   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado1;?>" alt="Acabado 1 de <?php echo $tipo->nombre; ?> - proSton.es"/></a>

<a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado2;?>" rel="zoom-position: top; zoom-height: 300px;zoom-width:500px; zoom-fade: true; zoom-fade-in-speed: 1000; zoom-fade-out-speed: 500; smoothing-speed: 10"  title="acabado 2" class="MagicZoom"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado2;?>" alt="Acabado 2 de <?php echo $tipo->nombre; ?> - proSton.es"/></a>

          

       <a href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/large/<?php echo $tipo->acabado3;?>" title="acabado 3" class="MagicZoom"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/acabados/mini/<?php echo $tipo->acabado3;?>" alt="Acabado 1 de <?php echo $tipo->nombre; ?> - proSton.es"/></a>
        
      
       
    

        </div>

 </div>
</div>

</div>





<div class="span3">
    <h3 style="font-size:15px;">Mármoles</h3>
    <div class="span12 galemat">
<div class="clearfix"></div>

        <?php foreach ($tipos as $key => $tipo):     ?>
            <div class="span2 ">
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

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
                <a href="<?php echo Yii::app()->request->baseUrl."/index.php/tipo/verCaracteristicas/id/".$tipo->id?>">

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
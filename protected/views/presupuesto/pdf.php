

 
  <div class="">
    
    <div class="row-fluid ">
      
      <div class="span12">
          
        <a href="http://www.proston.es"> <img  class="brand logo" width="200px" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" />
        <img style="float:right" class="brand logo"  src="<?php echo Yii::app()->baseUrl; ?>/images/telefono.png" /></a>
      </div>
    </div>


    <div class="row-fluid ">
      <div class="span12">
        <table class="table table-condensed" style="border:0;">

          <tr style="border:0px;" >
            <td> 
            17849768C<br>
            Avda. Jose Anselmo Clavé 49 - 9A<br>
            50004 Zaragoza<br>
            </td>
          </tr>

          <tr style="border:0px;" >
            <td align="right" style="font-size:20px;"> 
              <strong> Presupuesto</strong><br>
              <strong> online</strong>
            </td>
          </tr>


          <?php  if( isset($presupuesto) && $presupuesto->id != 0 ):
          $criteria=new CDbCriteria;                      
          $criteria->compare('id_presupuesto',$presupuesto->id);  
          $criteria->select = '*';
          $piezas = Valorpieza::model()->findAll($criteria); ?>

         <?php foreach ($piezas as $key => $pieza): ?>


  
          <tr style="border:0px;" >
            <td> 
              Nº Presupuesto: <?php echo $pieza->presupuesto->id ?> <br>
              Fecha: <?php echo $pieza->presupuesto->fecha?> <br>
            </td>
          </tr>

          <tr style="border:0px;"><td></td></tr>

          <tr>
            <td  style="border:1px solid black"> 
              Nombre:  <?php echo $pieza->presupuesto->nombre ?><br>
              Email: <?php echo $pieza->presupuesto->email ?> <br>
              Teléfono:  <?php echo $pieza->presupuesto->telefono?>
            </td>
          </tr>

          <tr  style="border:0px;"><td></td></tr>
          
          <tr style="border:0px;" >
            <td align="center">
              <p>Este presupuesto solo tiene validez informativa y  no tiene obligación de pago. </p>
            </td>
          </tr>
          <?php break; ?>
          <?php endforeach; ?>
          <?php endif; ?>
        </table>
      </div>
    </div>

    <h4>Material</h4>

      <div class="row-fluid ">
        <div class="span12" style="border:1px solid black">
          <table class="table table-condensed"  style="border:0;">
            
            
            <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/

             $i = 1;
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>

              <?php foreach ($piezas as $key => $pieza): ?>

              <tr style="background-color:#134263; ">
                <td colspan="3">
                <h6 style="color:white;">•<font color="#abdeff">Consulta <?php echo $i;?></font><font color="#b44f18"> | </font><?php echo $pieza->tamanoreal;
                 if( $pieza->id_pieza == 1 ){echo " m<sup>2</sup> ";
                  }else{
                   echo " m. ";
                  } 
                  echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?><font color="#b44f18"> | </font></h6> </td>
                <?php $i=$i+1; ?>
                <td colspan="6"></td></tr>
              <tr class="success"> 
                <td><h6>Concepto </h6></td>             
                <td><h6>Nº Piezas</h6></td>
                <td><h6>Tamaño</h6></td>
                <td><h6>Cantidad</h6></td>
                <td  align="center"><h6>Precio</h6></td>
                <td  align="center"><h6>Base</h6></td>  
                <td  align="center"><h6>21 % IVA</h6></td>  
                <td  align="center"><h6>Total</h6></td>            
              </tr>

              <tr> 
                <td>
                 <?php echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?>
                 </td>
                  <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td align="center">
                  <?php if( $pieza->tamano->id == 14 || $pieza->tamano->id == 15 ){
                     echo '';
                  }else{
                   echo $pieza->numeropiezas;
                  }  ?>
                </td>
           
                <td><?php echo $pieza->tamano->nombre; ?></td>
                <td align="right">

                  <?php $tareal2 = round($pieza->tamanoreal,2);
                  $tareal3 =number_format((float)$tareal2, 2, '.', '');
                  echo str_replace(".",",",$tareal3) ;?>
                  <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                  }else{
                   echo "m.";
                  }  ?>
                     


                  

                </td>
                 <td align="right">

                 <?php $preuni = round($pieza->preciounitario,2);
                  $preuni2 =number_format((float)$preuni, 2, '.', '');
                  echo str_replace(".",",",$preuni2) ;?>


                 €/<?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>

                 
                <td align="right" ><?php $preciomat = round($pieza->preciounitario * $pieza->tamanoreal,2);

                    $preciomat2 =number_format((float)$preciomat, 2, '.', '');

                  echo str_replace(".",",",$preciomat2); ?> €
                </td>

                <td align="right">
                  <?php $precioivamat = round(((($pieza->preciounitario * $pieza->tamanoreal))/100)*21,2);
                  $precioivamat2 =number_format((float)$precioivamat, 2, '.', '');
                  echo str_replace(".",",",$precioivamat2) ;?> €
                 </td>

                 <td align="right"> 
                  <?php $pmat = round((($pieza->preciounitario * $pieza->tamanoreal)/100)*21  + ($pieza->preciounitario * $pieza->tamanoreal),2);
                  $pmat2 =number_format((float)$pmat, 2, '.', '');
                  echo str_replace(".",",",$pmat2) ;?> €
                </td>
              </tr>

            
                <!-- CARA -->
              <tr>

                 <td ><em>Cara</em> - <?php echo $pieza->terminacion->nombre; ?></td>

                 

                <td colspan="2">
                 
        
                 </td>


               
                <td align="right"> 
                  <?php if( $pieza->id_pieza == 1 ){
                    $tareal = round($pieza->tamanoreal,2);
                  }else{
                    $tareal = round($pieza->tamanoreal * $pieza->tamano->tamanopieza,2);
                  }  ?>

                 <?php 
                  $tareal2 =number_format((float)$tareal, 2, '.', '');
                  echo str_replace(".",",",$tareal2) ;?>

                  m<sup>2</sup>
                </td>

                <td align="right">
                  <?php echo $pieza->terminacion->precio; ?> €/m<sup>2</sup>
                </td>


               

                <td align="right">

                   <?php if( $pieza->id_pieza == 1 ){
                      $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal,2);
                }else{
                    $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza,2);
                    
                 }  ?> 

                  <?php $precioter2 =number_format((float)$precioter, 2, '.', '');
                     if ($pieza->terminacion->precio == 0 ){
                    echo ("0");
                    }else{
                    echo str_replace(".",",",$precioter2); 
                    }?> €


                </td>


                <td align="right">
                  <?php if( $pieza->id_pieza == 1 ){
                    $precioivater = round((($pieza->terminacion->precio * $pieza->tamanoreal)/100)*21,2);
                  }else{
                   
                    $precioivater = round((($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza)/100)*21,2);
                    
                 }  ?> 
                 <?php 
                  $precioivater2 =number_format((float)$precioivater, 2, '.', '');
                  if ($pieza->terminacion->precio == 0 ){
                    echo ("0");
                  }else{
                 echo str_replace(".",",",$precioivater2); 
                  }?> €

                </td>


                 <td align="right">

                <?php if( $pieza->id_pieza == 1 ){
                    $pcara= ($pieza->terminacion->precio * $pieza->tamanoreal) + (((($pieza->terminacion->precio * $pieza->tamanoreal))/100)*21);
                      $preciototer= round($pcara,2);
                }else{
                  $pcara = ($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza)+(((($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza))/100)*21);
                    $preciototer=round($pcara,2);
                    
                 }  ?> 
                 <?php 
                  $precioivater3 =number_format((float)$preciototer, 2, '.', '');

                  if ($pieza->terminacion->precio == 0 ){
                    echo ("0");
                  }else{
                 echo str_replace(".",",",$precioivater3); 
                  }?> €


                  
                 </td>
          </tr>

          <!--CANTO -->
          <tr>

                 <td ><em>Canto </em>  <?php   


                  if( $pieza->id_tipo_canto== 1 ){
                  echo 'largo ' . $pieza->tamano->cantolargo * 100 . ' cm.';


                 }

                 if( $pieza->id_tipo_canto== 2 ){ 

                   echo 'corto ' . $pieza->tamano->cantocorto * 100 . ' cm. ';
                 } 

                 ?>



                 <?php if( $pieza->id_pieza == 1 ){
                  echo "- " . $pieza->terminacioncanto->nombre . ".";  
                  }else{

                  if( $pieza->terminacion->id == 32 ||  $pieza->terminacion->id == 17){

                   echo "- Pulido";
                  }else{
                    echo "- Apomazado";
                  }        

                 }  ?> 

                 </td>

              


                 
              
                 
                <td colspan="2">
                   </td>

               
                <td align="right">
                  <?php  
                 

                    if( $pieza->id_tipo_canto== 1 ){
                      $longitudcanto = $pieza->tamano->cantolargo;
                      }else{
                      $longitudcanto = $pieza->tamano->cantocorto;
                      } 
                     if( $pieza->id_pieza == 2 ){
                        $tareal = str_replace(".",",",$pieza->tamanoreal);
                      }else{
                        $ta = $pieza->numeropiezas * $longitudcanto;

                        $tareal = str_replace(".",",",$ta);


                      } 
                    
                    ?>

                  <?php 

                     if( $pieza->terminacioncanto->id == 41 || $pieza->terminacioncanto->id == 40 ){
                  
                  }else{

                    $tareal2 =number_format((float)$tareal, 2, '.', '');
                   echo str_replace(".",",",$tareal2) . " m.";
                 } 
                  ?>

                </td>

                <td align="right">

                 <?php 
                  $precarto = str_replace(".",",",$pieza->terminacioncanto->precio);
                 $precarto2 =number_format((float)$precarto, 2, '.', '');

                 if ($pieza->terminacioncanto->precio == 0 ){
                    echo ("0 €");
                  }else{
                   echo str_replace(".",",",$precarto2); 
                      if( $pieza->id_pieza == 1 ){
                        echo " €/m.";
                     }else{
                        echo "";
                     }  

                   }?>
                
                <?php ?> 
                 </td>

                
                
                <td align="right">
                  <?php $precioterca = round($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto,2);
                  $precioterca2 =number_format((float)$precioterca, 2, '.', '');
                  if ($pieza->terminacioncanto->precio == 0 ){
                    echo ("0");
                  }else{
                 echo str_replace(".",",",$precioterca2); 
                  }?> €
                </td>


               <td align="right">
                    <?php $precioivaterca = round(((($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto))/100)*21,2);
                    $precioivaterca2 =number_format((float)$precioivaterca, 2, '.', '');?>

                   <?php    if ($pieza->terminacioncanto->precio == 0 ){
                    echo ("0");
                  }else{
                echo str_replace(".",",",$precioivaterca2);  
                }?> €
                 </td>


                 <td align="right">

                 <?php
                 $pcanto = ($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto) + (((($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto))/100)*21);

                  $preciototerca= round($pcanto,2);
                  $preciototerca2 =number_format((float)$preciototerca, 2, '.', '');?>
                  <?php  if ($pieza->terminacioncanto->precio == 0 ){
                    echo ("0");
                  }else{
                  echo str_replace(".",",",$preciototerca2); }?> €
                 </td>
          </tr>



          <!--ARISTA-->
          <tr>

                 <td ><em>Arista</em> - <?php echo $pieza->terminacionarista->nombre; ?>
                 </td>

                 
                <td colspan="2">

              </td>


               
                <td align="right">
                <?php $tareal = round($pieza->tamanoreal,2)?>


                  <?php if( $pieza->terminacionarista->id == 42 || $pieza->terminacionarista->id == 43 ){
                  
                  }else{
                     $tareal2 =number_format((float)$tareal, 2, '.', '');
                   echo str_replace(".",",",$tareal2);

                    
                 
                      if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                        }else{
                       echo " m.";
                      }  


                 }?>
                 </td>


                <td align="right">
                <?php $termari = round($pieza->terminacionarista->precio,2);
                    $termari2 =number_format((float)$termari, 2, '.', '');

                    if ($pieza->terminacioncanto->precio == 0 ){
                    echo ("0 €");
                  }else{
                   echo str_replace(".",",",$termari2);?> €
                  <?php if( $pieza->id_pieza == 1 ){echo "/m<sup>2</sup>";
                  }else{
                  echo "";
                  }  
                  }?>
                </td>

                
                <td align="right">
                  <?php $precioterari = round($pieza->terminacionarista->precio * $pieza->tamanoreal,2);
                  $precioterari2 =number_format((float)$precioterari, 2, '.', '');?>
                   <?php  if ($pieza->terminacionarista->precio == 0 ){
                    echo ("0");
                  }else{
                  echo str_replace(".",",",$preciototerari2); }?> €

                </td>


                <td align="right">
                  <?php $precioivaterari = round(((($pieza->terminacionarista->precio * $pieza->tamanoreal))/100)*21,2);
                  $precioivaterari2 =number_format((float)$precioivaterari, 2, '.', '');?>
                  
                  <?php  if ($pieza->terminacionarista->precio == 0 ){
                    echo ("0");
                  }else{
                  echo str_replace(".",",",$precioivaterari2); }?> €

                </td>


                 <td align="right">
                 <?php $preciototerari= round(($pieza->terminacionarista->precio * $pieza->tamanoreal) + (((($pieza->terminacionarista->precio * $pieza->tamanoreal))/100)*21),2);
                 $preciototerari2 =number_format((float)$preciototerari, 2, '.', '');?>
                 <?php $parista = ($pieza->terminacionarista->precio * $pieza->tamanoreal) + ((($pieza->terminacionarista->precio * $pieza->tamanoreal)/100)*21); ?>
                 <?php  if ($pieza->terminacionarista->precio == 0 ){
                    echo ("0");
                  }else{
                  echo str_replace(".",",",$preciototerari2); }?> €


                 </td>
          </tr>

           <tr >
              <td colspan="5"></td>
              <td align="right" colspan="2"><strong>Precio material </strong></td>
                <?php $preciototivamat = round($pmat + $pcara + $pcanto + $parista,2); ?>
               
              <td align="right"><strong><?php echo str_replace(".",",",$preciototivamat); ?> €</strong></td>
              </tr>
              <tr><td></td></tr>
          <br>
              
                       <?php endforeach; ?>
            <?php endif; ?>

      </table>
      </div> 
  </div>

  <div class="span12" style="margin-top:15px; font-size:18px;">
       <strong>Transporte</strong><font size="3"> (Opcional. Recogida en origen sin cargo. A partir de 100m<sup>2</sup> disponemos de transportes mas económicos)</font>
       </div>
      <div class="row-fluid marketing">
        <div class="span12" style="border:1px solid black">
           <table class="table table-condensed">
           
            
            <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/
              $o = 1;
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
             
              
              <?php foreach ($piezas as $key => $pieza): ?>

              <tr style="background-color:#134263; ">
                <td><h6 style="color:white;">Consulta <?php echo $o;?></h6></td>
                <?php $o = $o + 1; ?>
                <td colspan="7"></td></tr>

            <tr class="success"> 
 
              <td align="center" colspan="2"><h6>Peso</h6></td>             
              <td align="center"><h6>Origen</h6></td>  
              <td align="center"><h6>Destino</h6></td>  
              <td align="center"><h6>Nº Palés</h6></td>
              <td align="center"><h6>Base</h6></td> 
              <td align="center"><h6>21 % IVA </h6></td>
              <td align="center"><h6>Total</h6></td>   
            </tr>

                <tr> 
                
                <?php $pesopieza = round($pieza->peso,2)?>
                <td align="center" colspan="2"><?php echo str_replace(".",",",$pesopieza); ?> Kg</td>
                <td align="center"><?php echo $pieza->tipo->provincia->nombre ?></td>
                <td align="center"><?php echo $pieza->provincia->nombre; ?></td>
                <td align="center"> <?php echo $pieza->pales; ?></td>
                <td align="center"> <?php echo $pieza->preciotransporte; ?> €</td>


               <?php $ivatrans = round(($pieza->preciotransporte/100)*21,2)?>
              <td align="center"> <?php echo str_replace(".",",",$ivatrans) ?> €</td>

          <?php $tottrans = round(($pieza->preciotransporte/100)*21 + $pieza->preciotransporte,2)?>
              <td align="right"> <strong><?php echo str_replace(".",",",$tottrans) ?>€</strong> </td>

                </tr>




                <br><br>
              <?php endforeach; ?>
            <?php endif; ?>
      </table>
      </div> 
      </div>


<h4>Total</h4>
      <div class="row-fluid " >
        <div class="span12" style="border:1px solid black">
           <table width="100%">
           
            
            <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/
              $u = 1;
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
             
              
              <?php foreach ($piezas as $key => $pieza): ?>

              <tr >
                <td style="background-color:#134263; "><h6 style="color:white;">Consulta <?php echo $u?></h6></td>
                <?php $u = $u + 1; ?>
           <td align="right" style="padding-right:5px;">Material ( <?php
            $tottrans = round(($pieza->preciotransporte/100)*21 + $pieza->preciotransporte,2);
            $totmat = round(($pieza->precio/100)*21 + $pieza->precio,2);
           /* $preciototivamat = round($preciototivamat,2);*/
            echo str_replace(".",",",$totmat); ?> €) + transporte( <?php echo str_replace(".",",",$tottrans) ?> €)</td>

           <?php $fintotal = round($totmat + $tottrans,2)?>
           <td style=" border: 1px solid black" align="center"><strong><?php echo str_replace(".",",",$fintotal) ?> €</strong></td>
              <?php endforeach; ?>
            <?php endif; ?>
      </table>
      </div> 
      </div>

      <div class="span12" style="margin-top:30px;">
                 
          <table width="100%">
            <tr>
              <td>Comentarios para esta consulta:</td>
              <td></td>
              <td>Datos de envio:</td>
            </tr>

            <tr >
              <td style="border:1px solid black"> 
               <?php echo $pieza->presupuesto->informacion_adicional?>
              </td>
              <td></td>
              <td style="border:1px solid black">
               Transportista: PalletWay<br>
              Destino: <?php echo $pieza->provincia->nombre; ?> (Concretar destino)</td>
            </tr>
          </table>
     
    </div>

      <div>
        Disponemos de una red de profesionales en toda España dedicados a la instalaciones de marmoles y granitos.</div>
     <div class="span12" style="font-size:10px;">
        De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, puede ejercer los derechos de acceso, cancelación y rectificación remitiendo carta certificada a nuestras oficinas sitas en Avda. Jose Anselmo Clavé 49 - 9A -  50004 Zaragoza.
     </div>

<!--
      <h4>Condiciones de compra</h4>
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
            <tr class="success">   
              <td><h6>kjkjk</h6></td>           
                     
            </tr>
            <tr>
                    
            </tr>
          </table>
        </div> 
      </div>
-->



      <div class="footer">
        <p>2014 &copy; proSton.es</p>
      </div>

    </div> <!-- /container -->
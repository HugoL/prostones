

 
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
          Avda. Jose Antonio Clavé 49 - 9A<br>
          50004 Zaragoza<br>
          

      </td>
    </tr>



    <tr style="border:0px;" >
      <td align="right" style="font-size:20px;"> 
     <strong> Presupuesto</strong><br>
     <strong> online</strong>
      </td>
    </tr>


      <?php if( isset($presupuesto) && $presupuesto->id != 0 ):
      
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/
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

       <tr  >
      <td  style="border:1px solid black"> 
         Nombre:  <?php echo $pieza->presupuesto->nombre ?><br>
        Email: <?php echo $pieza->presupuesto->email ?> <br>
        Teléfono:  <?php echo $pieza->presupuesto->telefono?>
      </td>
    </tr>  
    <tr  style="border:0px;"><td></td></tr>
  <tr style="border:0px;" >
  <td align="center">
   <p>Este presupuesto tiene validez informativa y  no tiene obligación de pago. </p>
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
           <table class="table table-condensed" style="border:0;">
            
            
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
                <td><h6 style="color:white;">Consulta <?php echo $i;?></h6></td>
                <?php $i=$i+1; ?>
                <td colspan="7"></td></tr>
              <tr class="success"> 
                <td><h6>Concepto </h6></td>             
                <td><h6>Nº Piezas</h6></td>
                <td><h6>Tamaño</h6></td>
                <td><h6>Cantidad</h6></td>
                <td><h6>Precio</h6></td>
                <td><h6>Base</h6></td>  
                <td><h6>21 % IVA</h6></td>  
                <td><h6>Total</h6></td>            
              </tr>

              <tr> 


                 <td>
                 <?php echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?>
                 </td>
                <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td>
                  <?php if( $pieza->tamano->id == 14 || $pieza->tamano->id == 15 ){
                         echo '';
                     }else{
                     echo $pieza->numeropiezas;
                     }  ?>
                


                 </td>
           
                 <td><?php echo $pieza->tamano->nombre; ?></td>
                 <td align="center">
                <?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m";
                 }  ?>
                     
                 </td>
                 <td>
      <?php $preuni = str_replace(".",",",$pieza->preciounitario)?>
                 <?php echo $preuni; ?> €/<?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m";
                 }  ?></td>

                 <?php $preciomat = round($pieza->preciounitario * $pieza->tamanoreal,2)?>
                 <td align="right" ><?php echo str_replace(".",",",$preciomat); ?> </td>

                 <td align="right">
                    <?php $precioivamat = round(((($pieza->preciounitario * $pieza->tamanoreal))/100)*21,2)?>
                <?php echo str_replace(".",",",$precioivamat);  ?> €
                 </td>
                 <td align="right"> 

                 <?php $pmat =(($pieza->preciounitario * $pieza->tamanoreal)/100)*21  + ($pieza->preciounitario * $pieza->tamanoreal);?>

                 <?php $precioivatotmat = round($pmat,2);
                 ?>
                <?php echo str_replace(".",",",$precioivatotmat);  ?> €
                </td>
              </tr>

            

              <tr>

                 <td >Cara - <?php echo $pieza->terminacion->nombre; ?></td>

                 

                <td colspan="2">
                 

                


                


                 </td>


               
                <td > <?php if( $pieza->id_pieza == 1 ){

                      $tareal = round($pieza->tamanoreal,2);
                      echo str_replace(".",",",$tareal) ;
                }else{
                    $tareal = round($pieza->tamanoreal * $pieza->tamano->tamanopieza,2);
                    echo str_replace(".",",",$tareal );
                 }  ?> m<sup>2</sup></td>
                <td><?php echo $pieza->terminacion->precio; ?> €/m<sup>2</sup></td>


               

                <td align="right">

                   <?php if( $pieza->id_pieza == 1 ){
                      $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal,2);
                }else{
                    $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza,2);
                    
                 }  ?> 

                

                <?php echo str_replace(".",",",$precioter); ?> €</td>


               <td align="right">
                  <?php if( $pieza->id_pieza == 1 ){
                     
                      $precioivater = round((($pieza->terminacion->precio * $pieza->tamanoreal)/100)*21,2);
                }else{
                   
                    $precioivater = round((($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza)/100)*21,2);
                    
                 }  ?> 

                  

                <?php echo str_replace(".",",",$precioivater);  ?> €
                 </td>


                 <td align="right">
                <?php if( $pieza->id_pieza == 1 ){
                    $pcara= ($pieza->terminacion->precio * $pieza->tamanoreal) + (((($pieza->terminacion->precio * $pieza->tamanoreal))/100)*21);
                      $preciototer= round($pcara,2);
                }else{
                  $pcara = ($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza)+(((($pieza->terminacion->precio * $pieza->tamanoreal * $pieza->tamano->tamanopieza))/100)*21);
                    $preciototer=round($pcara,2);
                    
                 }  ?> 

               



                 <?php echo str_replace(".",",",$preciototer); ?> €
                 </td>
          </tr>
          <tr>

                 <td >Canto   <?php  if( $pieza->id_tipo_canto== 1 ){
                    echo 'largo ';
                 }else{ 
                   echo 'corto ';
                 } ?>



                 <?php if( $pieza->id_pieza == 1 ){
                                         echo $pieza->terminacioncanto->nombre . ".";  
                                         }else{

                                            if( $pieza->terminacion->id == 32 ||  $pieza->terminacion->id == 17){
                                                echo " Pulido";
                                            }else{
                                                echo " Apomazado";
                                            }        

                                        }  ?> 

                 </td>

                 <?php  if( $pieza->id_tipo_canto== 1 ){
                    $longitudcanto = $pieza->tamano->cantolargo;
                 }else{
                   $longitudcanto = $pieza->tamano->cantocorto;
                 } ?>
          <?php if( $pieza->id_pieza == 2 ){
                         $tareal = str_replace(".",",",$pieza->tamanoreal);
                     }else{
                        $ta = $pieza->numeropiezas * $longitudcanto;

                        $tareal = str_replace(".",",",$ta);
                     }  ?>


                 
              
                 
                <td colspan="2">
                   </td>


               
                <td ><?php echo $tareal . "m."; ?></td>
                <td><?php echo $pieza->terminacioncanto->precio; ?> €<?php if( $pieza->id_pieza == 1 ){echo "/m";
                }else{
                echo "";
                 }  ?></td>

                <?php $precioterca = round($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto,2)?>
                <td align="right">


                <?php echo str_replace(".",",",$precioterca); ?> €</td>


               <td align="right">
                    <?php $precioivaterca = round(((($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto))/100)*21,2)?>
                <?php echo str_replace(".",",",$precioivaterca);  ?> €
                 </td>


                 <td align="right">

                 <?php
                 $pcanto = ($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto) + (((($pieza->terminacioncanto->precio * $pieza->numeropiezas * $longitudcanto))/100)*21);

                  $preciototerca= round($pcanto,2)?>
                 <?php echo str_replace(".",",",$preciototerca); ?> €
                 </td>
          </tr>
          <tr>

                 <td >Arista- <?php echo $pieza->terminacionarista->nombre; ?>
                 </td>

                 
                <td colspan="2">

              </td>


               
                <td >
                <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>
                <td><?php echo $pieza->terminacionarista->precio; ?> €<?php if( $pieza->id_pieza == 1 ){echo "/m<sup>2</sup>";
                }else{
                echo "";
                 }  ?></td>

                <?php $precioterari = round($pieza->terminacionarista->precio * $pieza->tamanoreal,2)?>
                <td align="right">


                <?php echo str_replace(".",",",$precioterari); ?> €</td>


               <td align="right">
                    <?php $precioivaterari = round(((($pieza->terminacionarista->precio * $pieza->tamanoreal))/100)*21,2)?>
                <?php echo str_replace(".",",",$precioivaterari);  ?> €
                 </td>


                 <td align="right"><?php $preciototerari= round(($pieza->terminacionarista->precio * $pieza->tamanoreal) + (((($pieza->terminacionarista->precio * $pieza->tamanoreal))/100)*21),2)?>
                 <?php $parista = ($pieza->terminacionarista->precio * $pieza->tamanoreal) + ((($pieza->terminacionarista->precio * $pieza->tamanoreal)/100)*21); ?>
                 <?php echo str_replace(".",",",$preciototerari); ?> €
                 </td>
          </tr>

           <tr>
              <td colspan="5"></td>
              <td align="right" colspan="2"><strong>Precio material </strong></td>
                <?php $preciototivamat = round($pmat + $pcara + $pcanto + $parista,2); ?>
               
              <td align="right"><strong><?php echo str_replace(".",",",$preciototivamat); ?> €</strong></td>
              </tr>
          <br><br>
              
                       <?php endforeach; ?>
            <?php endif; ?>

      </table>
      </div> 
  </div>

  <div class="span12" style="margin-top:15px; font-size:18px;">
       <strong>Transporte</strong><font size="3"> (Opcional. Recogida en origen sin cargo. A partir de 100m<sup>2</sup> disponemos de transportes mas económicos</font>
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
              <td><h6>Nº Pales</h6></td>
              <td align="center"><h6>Base</h6></td> 
              <td align="center"><h6>21 % IVA </h6></td>
              <td align="center"><h6>Total</h6></td>   
            </tr>

                <tr> 
                
                <?php $pesopieza = round($pieza->peso,2)?>
                <td align="center" colspan="2"><?php echo str_replace(".",",",$pesopieza); ?> Kg</td>
                <td align="center"><?php echo $pieza->tipo->provincia->nombre ?></td>
                <td align="center"><?php echo $pieza->provincia->nombre; ?></td>
                <td> <?php echo $pieza->pales; ?></td>
                <td align="right"> <?php echo $pieza->preciotransporte; ?></td>


               <?php $ivatrans = round(($pieza->preciotransporte/100)*21,2)?>
              <td align="center"> <?php echo str_replace(".",",",$ivatrans) ?> €</td>

          <?php $tottrans = round(($pieza->preciotransporte/100)*21 + $pieza->preciotransporte,2)?>
              <td align="right"> <strong><?php echo str_replace(".",",",$tottrans) ?></strong></td>

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
            $preciototivamat = round($preciototivamat,2);
            echo str_replace(".",",",$preciototivamat); ?> €) + transporte( <?php echo str_replace(".",",",$tottrans) ?> €)</td>

           <?php $fintotal = round($preciototivamat + $tottrans,2)?>
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
        De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, puede ejercer los derechos de acceso, cancelación y rectificación remitiendo carta certificada a nuestras oficinas sitas en Avda. Jose Antonio Clavé 49 - 9A -  50004 Zaragoza.
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
        <p>2014 .&copy; proSton.es</p>
      </div>

    </div> <!-- /container -->
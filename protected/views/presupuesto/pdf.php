
<?php 
  Yii::app()->clientScript->registerCssFile(Yii::getPathOfAlias('webroot.themes')."blackboot/css/bootstrap.css");
?>

    <div class="">
     
      
      <div class="row-fluid ">
        <div class="span12">
          
         <a href="http://www.proston.es"> <img  class="brand logo" width="200px" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a>
          <p>Este presupuesto tiene validez informativa y  no tiene obligación de pago. </p>
        </div>
      </div>

        <h4>Material</h4>
      <div class="row-fluid ">
        <div class="span12">
           <table class="table table-condensed" style="border:0;">
            
            
            <? if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/


              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
              <? foreach ($piezas as $key => $pieza): ?>

              <tr style="background-color:#134263; ">
                <td><h6 style="color:white;">Pedido <?php echo $pieza->id;?></h6></td>
                <td colspan="5"></td></tr>
              <tr class="success"> 
                <td><h6>Cantidad</h6></td>             
                <td><h6>Concepto</h6></td>
                <td><h6>Tamaño</h6></td>
                <td><h6>Nº Piezas</h6></td>
                <td><h6>Precio</h6></td>
                <td ><h6>Subtotal</h6></td>              
              </tr>

              <tr> 
                <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td><?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>
           
                 <td><?php echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?></td>
                 <td><?php echo $pieza->tamano->nombre; ?></td>
                 <td align="center"><?php echo $pieza->numeropiezas; ?></td>
                <?php $preuni = str_replace(".",",",$pieza->preciounitario)?>
                 <td><?php echo $preuni; ?> € / <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>

                 <?php $preciomat = round($pieza->preciounitario * $pieza->tamanoreal,2)?>
                 <td align="right" ><?php echo str_replace(".",",",$preciomat); ?> €</td>
              </tr>

            

              <tr>
                 <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td><?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>
                <td >Terminación - <?php echo $pieza->terminacion->nombre; ?></td>
                <td colspan="2"></td>
                <td><?php echo $pieza->terminacion->precio; ?> €</td>

                <?php $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal,2)?>
                <td align="right"><?php echo str_replace(".",",",$precioter); ?> €</td>
              </tr>


              <tr>
                <td colspan="4"></td>
               <td align="right">Base imponible</td>

              <?php $preciototmat = round(($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal),2)?>
                <td align="right" bgcolor="#eaeff6"> <?php echo str_replace(".",",",$preciototmat); ?> €</td>
              </tr>
          

              <tr>
              <td colspan="4"></td>
              <td align="right">IVA 21%</td>

              <?php $precioivamat = round(((($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal))/100)*21,2)?>
              <td align="right"> <?php echo str_replace(".",",",$precioivamat);  ?> €</td>
              </tr>
          
              <tr>
              <td colspan="4"></td>
              <td align="right"><strong>Precio material </strong></td>
 
                 <?php $preciototivamat = round(($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal) + (((($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal))/100)*21),2)?>
              <td align="right"><strong><?php echo str_replace(".",",",$preciototivamat); ?> €</strong></td>
              </tr>
          <br><br>
              
                       <? endforeach; ?>
            <? endif; ?>

      </table>
      </div> 
      </div>

       <h4>Transporte</h4>(opcional. Recogida de material en origen. Coste 0.)
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
           
            
            <? if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
             
              
              <? foreach ($piezas as $key => $pieza): ?>

              <tr style="background-color:#134263; ">
                <td><h6 style="color:white;">Pedido <?php echo $pieza->id;?></h6></td>
                <td colspan="5"></td></tr>

 <tr class="success"> 
 
              <td align="center" colspan="2"><h6>Peso</h6></td>             
              <td align="center"><h6>Origen</h6></td>  
              <td align="center"><h6>Destino</h6></td>  
              <td><h6>Nº Pales</h6></td>
              <td align="right"><h6>Precio</h6></td>    
            </tr>

                <tr> 
                
                <?php $pesopieza = round($pieza->peso,2)?>
                <td align="center" colspan="2"><?php echo str_replace(".",",",$pesopieza); ?> €</td>
                <td align="center"><?php echo $pieza->tipo->provincia->nombre ?></td>
                <td align="center"><?php echo $pieza->provincia->nombre; ?></td>
                <td> <?php echo 1+$pieza->pales; ?></td>
                <td align="right"> <?php echo $pieza->preciotransporte; ?></td>
                </tr>



              <tr>

              <td colspan="4"></td>
              <td align="right">IVA 21%</td>
  
                
              <?php $ivatrans = round(($pieza->preciotransporte/100)*21,2)?>
              <td align="right"> <?php echo str_replace(".",",",$ivatrans) ?> €</td>
              </tr>
          
              <tr>
              <td colspan="4"></td>
              <td align="right"><strong>Precio transporte</strong></td>
              <?php $tottrans = round(($pieza->preciotransporte/100)*21 + $pieza->preciotransporte,2)?>
              <td align="right"> <strong><?php echo str_replace(".",",",$tottrans) ?></strong></td>
              </tr>

                <br><br>
              <? endforeach; ?>
            <? endif; ?>
      </table>
      </div> 
      </div>


<h4>Total</h4>
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
           
            
            <? if( isset($presupuesto) && $presupuesto->id != 0 ):
            echo "<h1>Presupuesto id: ".$presupuesto->id."</h1>";
              /*foreach ($presupuesto->valorpieza as $key => $pieza) {
                echo $pieza->nombre."<br/>";
              }*/
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
             
              
              <? foreach ($piezas as $key => $pieza): ?>

              <tr >
                <td style="background-color:#134263; "><h6 style="color:white;">Pedido <?php echo $pieza->id;?></h6></td>
           <td>Material + transporte</td>

           <?php $fintotal = round($pieza->precio  + ($pieza->precio*21/100),2)?>
           <td><strong><?php echo str_replace(".",",",$fintotal) ?> €</strong></td>
              <? endforeach; ?>
            <? endif; ?>
      </table>
      </div> 
      </div>


      <h4>Datos de la empresa</h4>
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
            <tr class="success">   
              <td><h6>cif</h6></td>           
              <td><h6>Nombre</h6></td>
              <td><h6>Dirección</h6></td>
              <td><h6>Teléfono</h6></td>  
              <td><h6>Web</h6></td>            
            </tr>
            <tr>
              <td>CIF</td>
              <td>proSton.es</td>
              <td>Dirección</td>    
              <td>6XX XXX XXX</td>  
              <td>www.proSton.es</td>           
            </tr>
          </table>
        </div> 
      </div>


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




      <div class="footer">
        <p>2014 .&copy; proSton.es</p>
      </div>

    </div> <!-- /container -->
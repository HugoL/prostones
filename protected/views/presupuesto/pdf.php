
<?php 
  Yii::app()->clientScript->registerCssFile(Yii::getPathOfAlias('webroot.themes')."blackboot/css/bootstrap.css");
?>

    <div class="">
     
      
      <div class="row-fluid ">
        <div class="span12">
          
         <a href="http://www.proston.es"> <img  class="brand logo" width="200px" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a>
         
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
          info@proston.es<br>

      </td>
    </tr>



    <tr style="border:0px;" >
      <td align="right" style="font-size:20px;"> 
     <strong> Presupuesto</strong>
      </td>
    </tr>


    <tr style="border:0px;" >
      <td> 
      Nº Presupuesto: 1212121 <br>
        Fecha: 03/07/2028 <br>
      </td>
    </tr>
     <tr style="border:0px;"><td></td></tr>

       <tr  >
      <td  style="border:1px solid black"> 
     Cliente: MARIANO LOPEZ PEREZ <br>
        Destino: Zaragoza <br>
        Email: sssdsds@gmaill.com <br>
        Teléfono: 654326745
      </td>
    </tr>  
    <tr  style="border:0px;"><td></td></tr>
  <tr style="border:0px;" >
  <td align="center">
   <p>Este presupuesto tiene validez informativa y  no tiene obligación de pago. </p>
   </td>
   </tr>

  </table>
</div>
</div>

        <h4>Material</h4>
      <div class="row-fluid ">
        <div class="span12" style="border:1px solid black">
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
                <td colspan="7"></td></tr>
              <tr class="success"> 
                <td><h6>Concepto</h6></td>             
                <td><h6>Cantidad</h6></td>
                <td><h6>Tamaño</h6></td>
                <td><h6>Nº Piezas</h6></td>
                <td><h6>Precio</h6></td>
                <td ><h6>Base</h6></td>  
                <td ><h6>21 % IVA</h6></td>  
                <td ><h6>Total</h6></td>            
              </tr>

              <tr> 


                 <td>
                 <?php echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?>
                 </td>
                <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td><?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>
           
                 <td><?php echo $pieza->tamano->nombre; ?></td>
                 <td align="center"><?php echo $pieza->numeropiezas; ?></td>
                <?php $preuni = str_replace(".",",",$pieza->preciounitario)?>
                 <td><?php echo $preuni; ?> € / <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>

                 <?php $preciomat = round($pieza->preciounitario * $pieza->tamanoreal,2)?>
                 <td align="right" ><?php echo str_replace(".",",",$preciomat); ?> €</td>

                 <td align="right">
                    <?php $precioivamat = round(((($pieza->preciounitario * $pieza->tamanoreal))/100)*21,2)?>
                <?php echo str_replace(".",",",$precioivamat);  ?> €
                 </td>
                 <td align="right"> <?php $precioivamat = round(((($pieza->preciounitario * $pieza->tamanoreal))/100)*21  + ($pieza->preciounitario * $pieza->tamanoreal) ,2)?>
                <?php echo str_replace(".",",",$precioivamat);  ?> €
                </td>
              </tr>

            

              <tr>

                 <td >Terminación - <?php echo $pieza->terminacion->nombre; ?></td>
                 <?php $tareal = str_replace(".",",",$pieza->tamanoreal)?>
                <td><?php echo $tareal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>


               
                <td colspan="2"></td>
                <td><?php echo $pieza->terminacion->precio; ?> €</td>

                <?php $precioter = round($pieza->terminacion->precio * $pieza->tamanoreal,2)?>
                <td align="right">


                <?php echo str_replace(".",",",$precioter); ?> €</td>


               <td align="right">
                    <?php $precioivater = round(((($pieza->terminacion->precio * $pieza->tamanoreal))/100)*21,2)?>
                <?php echo str_replace(".",",",$precioivater);  ?> €
                 </td>


                 <td align="right"><?php $preciototer= round(($pieza->terminacion->precio * $pieza->tamanoreal) + (((($pieza->terminacion->precio * $pieza->tamanoreal))/100)*21),2)?>
                 <?php echo str_replace(".",",",$preciototer); ?> €
                 </td>
                       </tr>


           <tr>
              <td colspan="5"></td>
              <td align="right" colspan="2"><strong>Precio material </strong></td>
 
                 <?php $preciototivamat = round(($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal) + (((($pieza->terminacion->precio * $pieza->tamanoreal) + ($pieza->preciounitario * $pieza->tamanoreal))/100)*21),2)?>
              <td align="right"><strong><?php echo str_replace(".",",",$preciototivamat); ?> €</strong></td>
              </tr>
          <br><br>
              
                       <? endforeach; ?>
            <? endif; ?>

      </table>
      </div> 
  </div>

  <div class="span12" style="margin-top:15px; font-size:18px;">
       <strong>Transporte</strong><font size="3"> (Opcional. Recogida de material en origen a coste 0.)</font>
       </div>
      <div class="row-fluid marketing">
        <div class="span12" style="border:1px solid black">
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
                <td align="center" colspan="2"><?php echo str_replace(".",",",$pesopieza); ?> €</td>
                <td align="center"><?php echo $pieza->tipo->provincia->nombre ?></td>
                <td align="center"><?php echo $pieza->provincia->nombre; ?></td>
                <td> <?php echo 1+$pieza->pales; ?></td>
                <td align="right"> <?php echo $pieza->preciotransporte; ?></td>


               <?php $ivatrans = round(($pieza->preciotransporte/100)*21,2)?>
              <td align="center"> <?php echo str_replace(".",",",$ivatrans) ?> €</td>

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
      <div class="row-fluid " >
        <div class="span12" style="border:1px solid black">
           <table width="100%">
           
            
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
           <td align="right" style="padding-right:5px;">Material ( <?php echo str_replace(".",",",$preciototivamat); ?> €) + transporte( <?php echo str_replace(".",",",$tottrans) ?> €)</td>

           <?php $fintotal = round($pieza->precio  + ($pieza->precio*21/100),2)?>
           <td style=" border: 1px solid black" align="center"><strong><?php echo str_replace(".",",",$fintotal) ?> €</strong></td>
              <? endforeach; ?>
            <? endif; ?>
      </table>
      </div> 
      </div>

      <div class="span12" style="margin-top:30px;">
                 
          <table width="100%">
            <tr>
              <td>Comentarios del pedido y la entrega:</td>
              <td></td>
              <td>Datos de envio:</td>
            </tr>

            <tr >
              <td style="border:1px solid black"> 
                Necesito que .... <br>
                Tambien..s.as. <br>
              </td>
              <td></td>
              <td style="border:1px solid black">
               Transportista: PalletWay<br>
              Destino: X (Concretar destino)</td>
            </tr>
          </table>
     
    </div>

      <div>
        Disponemos de una red de profesionales en toda España dedicados a la instalaciones de marmoles y granitos.</div>
     <div class="span12" style="font-size:10px;">
        De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, puede ejercer los derechos de acceso, cancelación y rectificación remitiendo carta certificada a nuestras oficinas sitas en Centro Empresarial Parque Roma Plaza Roma,1 50017 Zaragoza.
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
<?php
/* @var $this CompraController */
/* @var $model Compra */
?>
<?php 
  Yii::app()->clientScript->registerCssFile(Yii::getPathOfAlias('webroot.themes')."blackboot/css/bootstrap.css");
?>

    <div class="container-narrow-pdf">
      <div class="well">

        <img  class="brand logo" width="200px" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" />

        <h3><center>Presupuesto</center></h3><br/>
        <p >Presupuesto de Proston.es</p>
      </div>
      
      <div class="row-fluid marketing destacado">
        <div class="span12">
          <p>Este presupuesto tiene validez informativa y  no tiene obligación de pago. </p>
        </div>
      </div>

        <h4>Piezas</h4>
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

              <tr class="success"> 
                <td><h6>Cantidad</h6></td>             
                <td><h6>Pieza</h6></td>
                <td><h6>Tamaño</h6></td>
                <td><h6>Nº Piezas</h6></td>
                <td><h6>Subtotal</h6></td>              
              </tr>

              <tr> 
                <td><?php echo $pieza->tamanoreal; ?> <?php if( $pieza->id_pieza == 1 ){echo "m<sup>2</sup>";
                }else{
                echo "m.";
                 }  ?></td>
            
                 <td><?php echo $pieza->pieza->nombre; ?> de <?php echo $pieza->tipo->nombre; ?></td>
                 <td><?php echo $pieza->tamano->nombre; ?></td>
                 <td><?php echo $pieza->numeropiezas; ?></td>
                 <td><?php echo $preciopiezas; ?></td>

                 
             </tr>

              <tr>
                <td><h6>Terminación</h6></td>
             
              <td><h6>Precio</h6></td>
              <td><h6>Subtotal</h6></td>
                </tr>
                <tr>
                  <td><?php echo $pieza->terminacion->nombre; ?></td>
                  <td><?php echo $pieza->precio * $pieza->cantidad;?></td>
                </tr>
                <tr><td>Precio material</td></tr>
                <tr><td></td></tr>
              <? endforeach; ?>
            <? endif; ?>
      </table>
      </div> 
      </div>

       <h4>Transporte</h4>
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
            <tr class="success"> 
              <td><h6>Peso</h6></td>             
              
            </tr>
            
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
                <tr> 
                <td><?php echo $pieza->peso; ?> </td>
                </tr>
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
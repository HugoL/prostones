<?php
/* @var $this CompraController */
/* @var $model Compra */
?>
<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.css');
?>

    <div class="container-narrow-pdf">

      <div class="well">
        <h3><center>Presupuesto</center></h3><br/>
        <p >Presupuesto de Proston.es</p>
      </div>
      
      <div class="row-fluid marketing destacado">
        <div class="span12">
          <p>Este presupuesto tiene una validez informativa. Si desea un presupuesto definitivo contacte con proston.es</p>
        </div>
      </div>

        <h4>Piezas</h4>
      <div class="row-fluid marketing">
        <div class="span12">
           <table class="table table-condensed">
            <tr class="success">              
              <td><h6>Pieza</h6></td>
              <td><h6>Terminación</h6></td>
              <td><h6>Precio</h6></td>
              <td><h6>Cantidad</h6></td>
              <td><h6>Subtotal</h6></td>
            </tr>
            
            <? if( isset($presupuesto) && $presupuesto->id != 0 ):
              $criteria=new CDbCriteria;                      
              $criteria->compare('id_presupuesto',$presupuesto->id);  
              $criteria->select = '*';
              $piezas = Valorpieza::model()->findAll($criteria); ?>
              <? foreach ($piezas as $key => $pieza): ?>
                <tr>
                  <td><?php echo $pieza->id_tipo; ?></td>
                  <td><?php echo $pieza->id_terminacion; ?></td><td><?php echo $pieza->precio; ?></td>
                  <td><?php echo $pieza->cantidad; ?></td>
                  <td><?php echo $pieza->precio * $pieza->cantidad;?></td>
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
              <td>Proston.es</td>
              <td>Dirección</td>    
              <td>6XX XXX XXX</td>  
              <td>www.proston.es</td>           
            </tr>
          </table>
        </div> 
      </div>

      <div class="footer">
        <p>&copy; Proston.es</p>
      </div>

    </div> <!-- /container -->
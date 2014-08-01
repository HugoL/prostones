<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Catálogo';
?>






    <div class="span12">
        
        <?php $this->debug($tipos); ?>
         <?php $this->debug($preciosunitarios); ?>
<div class="span12">
<table>
    
        <?php foreach ($tipos as $key => $tipo):     ?>

        <tr>
            <td>
                <?php echo $tipo->nombre ?>
              
           </td>
           </tr>
           <tr>
           <td></td>
             <?php foreach ($preciosunitarios as $key => $preciounitario):     ?>
                <td>

        <?php echo $preciounitario->tamano->nombre;?><br>
        <?php echo $preciounitario->precio;           ?>
        </td>
        
        <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>

</table>        
</div>



        </div>



       
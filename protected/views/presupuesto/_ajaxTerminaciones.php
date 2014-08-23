

<div class="span3">
    <div class="span12">
        <strong>Cara</strong>
    </div>
    <div class="pa">
        <?php if( !empty($terminaciones) ): ?>
            <select id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
                <option value="">Selecciona terminacion de cara</option>         
                <?php foreach ($terminaciones as $key => $terminacion) : ?>
                    <option class="" value="<?php echo $terminacion->id ?>" ><?php echo $terminacion->nombre ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php else: ?>
        
            <div class"alert alert-warning">
                No hay terminaciones disponibles para esta pieza
            </div>   
        <?php endif; ?>  
    </div>
</div>

<?php if( $tipo_pieza == 2 ){?>

<div class="span5">
    
    <strong>Canto: </strong>Si la terminacion es pulido el canto sera pulido, las demas terminaciones el canto es apomazado.<br>
    <strong>Arista: </strong> Todo rodapie viene con bisel en una arista larga. 
</div>       
<?php  }else{?>                  
 <?php   }  ?>


<!--HABRA QUE CONTROLAR SI ES BALDOSA O RODAPIE POR QUE SE CALCULA DIFERENTE-->
<div class="span3" style="display:none" id="termaristas">
    <div class="span12">
         <strong>Arista</strong>
    </div>
    
    <div class="pa">                          
        <?php if( !empty($terminacionesArista) ): ?>
            <select id="Valorpieza_id_term_arista" name="Valorpieza[id_ternimacion_arista]">
                <option value="">Selecciona biselado</option>
                <?php foreach ($terminacionesArista as $key => $terminacion) : ?>

                    <option class="" value="<?php echo $terminacion->id ?>" ><?php echo $terminacion->nombre ?></option>
                <?php endforeach; ?>
                </select>
        <?php else: ?>
            <div class"alert alert-warning">No hay terminaciones disponibles para esta pieza</div>   
        <?php endif; ?> 
    </div>  
</div>

<div class="span3" style="display:none" style="display:none" id="termcantos">
    <div class="span12">
        <strong>Canto</strong>
    </div>
    <div class="pa">
        <?php if( !empty($terminacionesCanto) ): ?>
            <select id="Valorpieza_id_term_canto" name="Valorpieza[id_ternimacion_canto]">
                
            <option value="">Seleccione tratamiento de canto</option>
                <?php foreach ($terminacionesCanto as $key => $terminacion) : ?>
                    <option class="" value="<?php echo $terminacion->id ?>" ><?php echo $terminacion->nombre ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php else: ?>
        
            <div class"alert alert-warning">
                No hay terminaciones disponibles para esta pieza
            </div>   
        <?php endif; ?>  
    </div>
</div>

<div class="span3" style="float:right;">
    <div class="span12" >
    <?php if( $tipo_pieza == 1 ){?>
        <img style="float:right" src="<?php echo Yii::app()->request->baseUrl?>/images/baldosa.png"/>
    <?php  }else{?>
        rodapie
     <?php   }  ?>
        
    </div>
    <div><!--Se completa con AJAX-->  
                            
    </div>  
</div>


 

           
 


 


 <?php echo "<script>";
    echo "
$('#Valorpieza_id_term').change(function(){
       
         
    $('#Valorpieza_id_terminacion').val($(this).attr('value'));

    if( $('#Valorpieza_id_pieza').val() == 1 ){
            $('#termaristas').show('slow');
    }else{
            $('#Valorpieza_id_terminacion_arista').val('44');
            $('#Valorpieza_id_terminacion_canto').val('45');
            $('#destino').show('slow');
    }
     
      

      


    });
$('#Valorpieza_id_term_arista').change(function(){
        $('#termcantos').show('slow');
        
        $('#Valorpieza_id_terminacion_arista').val($(this).attr('value'));
        
    });
$('#Valorpieza_id_term_canto').change(function(){
         $('#pregunta3').attr('style','display:none');
        $('#ok3').attr('style','display:block');
        $('#destino').show('slow');
        
        $('#Valorpieza_id_terminacion_canto').val($(this).attr('value'));
        
    });
 


";
echo "</script>";
?>


<div class="row span12">
    <div class="span12">
        <div class="span4">
            <div class="span12">
                <strong>Cara</strong>
            </div>
            <div class="span12">
                <div class="span12">
                <?php if( !empty($terminaciones) ): ?>
                    <select type="text" class="form-control span12" id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
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
                <div id="pretermcara" class="span12" style="display:none">

                
                </div>
            </div>
        </div>

        <?php if( $tipo_pieza == 2 ){?>

        <div class="span7">
            <strong>Canto: </strong>Si la cara es pulida el canto sera pulido, las demas terminaciones el canto es apomazado.<br>
            <strong>Arista: </strong>El rodapié viene con bisel de 3mm en una arista larga. 
        </div>       
        <?php   }  ?>
        <?php if( $tipo_pieza == 3  ){?>

        <div class="span7">
            <strong>Canto: </strong>Si la terminacion es pulido el canto sera pulido, las demas terminaciones el canto es apomazado.<br>
            <strong>Arista: </strong>La huella viene con bisel de 3mm en una arista larga.  
        </div>       
        <?php   }  ?>
        <?php if( $tipo_pieza == 5){?>

        <div class="span7">
            <strong>Canto: </strong>Si la terminacion es pulido el canto sera pulido, las demas terminaciones el canto es apomazado.<br>
            <strong>Arista: </strong>El zanquin viene con bisel de 3mm en las aristas visibles. 
        </div>       
        <?php   }  ?>
        <!--HABRA QUE CONTROLAR SI ES BALDOSA O RODAPIE POR QUE SE CALCULA DIFERENTE-->
        <div class="span4" style="display:none" id="termaristas">
            <div class="span12">
                <strong>Arista</strong>
            </div>
            
            <div class="span12">                          
                <?php if( !empty($terminacionesArista) ): ?>
                    <select type="text" class="span12" id="Valorpieza_id_term_arista" name="Valorpieza[id_ternimacion_arista]">
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

        <div class="span4" style="display:none" style="display:none" id="termcantos">
            <div class="span12">
                <strong>Canto</strong>
            </div>
            <div class="span12">
                <div class="span12">
                    <?php if( !empty($terminacionesCanto) ): ?>
                        <select id="Valorpieza_id_term_canto" class="span12" name="Valorpieza[id_ternimacion_canto]">
                            
                        <option value="">Seleccione tratamiento</option>
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

                <div  style="display:none" id="tipocantos">
                  <?php if( !empty($tamanos) ): ?>
                        <select id="Valorpieza_id_tipo_canto" class="span12" name="Valorpieza[id_tipo_canto]">
                            
                        
                            
                             <?php foreach ($tamanos as $key => $tamano) : ?>
                               <option value="0">¿Que canto?</option>
                        <option value="1">Canto largo <?php echo $tamano->cantolargo * 100 . 'cm' ?></option>
                        <option value="2">Canto corto <?php echo $tamano->cantocorto * 100 . 'cm' ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php else: ?>
                    
                        <div class"alert alert-warning">
                            No hay terminaciones disponibles para esta pieza
                        </div>   
                    <?php endif; ?> 

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>


</div>

<?php echo "<script>";
    echo "
$('#Valorpieza_id_term').change(function(){
       
         
    $('#Valorpieza_id_terminacion').val($(this).attr('value'));

    if( $('#Valorpieza_id_pieza').val() == 1 ){
            $('#termaristas').show('slow');
            $('#pretermcara').show('slow');
    }else{
            $('#Valorpieza_id_terminacion_arista').val('44');
            $('#Valorpieza_id_terminacion_canto').val('45');
            $('#destino').show('slow');
             $('#pretermcara').show('slow');
    }
     
   


    });
$('#Valorpieza_id_term_arista').change(function(){
        $('#termcantos').show('slow');
        
        $('#Valorpieza_id_terminacion_arista').val($(this).attr('value'));
        
    });






$('#Valorpieza_id_term_canto').change(function(){
      
        $('#pregunta3').attr('style','display:block');
        $('#ok3').attr('style','display:none');
        
        $('#Valorpieza_id_terminacion_canto').val($(this).attr('value'));
        $('#destino').hide();

        if ( $('#Valorpieza_id_term_canto').val() == 40   || $('#Valorpieza_id_term_canto').val() == 41  ){
             $('#pregunta3').attr('style','display:none');
            $('#ok3').attr('style','display:block');
            $('#tipocantos').hide();
             $('#destino').show('slow');
        }else{
        $('#tipocantos').show('slow');
        }

    });


$('#Valorpieza_id_tipo_canto').change(function(){
         $('#pregunta3').attr('style','display:none');
        $('#ok3').attr('style','display:block');
        $('#destino').show('slow');
        
        $('#Valorpieza_id_tipo_canto').val($(this).attr('value'));
        
    });



 


";
echo "</script>";
?>

 <?php $url_action3 = CHtml::normalizeUrl(array('/presupuesto/ajaxPrecioTermCara')); ?>
    <?php echo "<script>";
    echo "
        $('#Valorpieza_id_term').change(function(){
     
            idterminacion = $('#Valorpieza_id_terminacion').val();
            
            $.ajax({
                url: '$url_action3', type: 'post', 
                data: { id_terminacion: idterminacion},
                success: function(response){
                    $('#pretermcara').html(response);
                },
                error: function(e){
                    $('#pretermcara').html(e.responseText);
                }
            });
   
    $('#pretermcara').show('slow');

    
});
";
echo "</script>";
?>

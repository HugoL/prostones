

<div class="span3">
    <div class="span12">
        <strong>Cara</strong>
    </div>
    <div>
        <?php if( !empty($terminaciones) ): ?>
            <select id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
                <option value="">Selecciona terminacion</option>
            
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
<!--HABRA QUE CONTROLAR SI ES BALDOSA O RODAPIE POR QUE SE CALCULA DIFERENTE-->
<div class="span3">
    <div class="span12">
         <strong>Arista</strong>
    </div>
    
    <div>                          
        <?php if( !empty($terminacionesArista) ): ?>
            <select id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
                <option value="">Sin bisel</option>
                <?php foreach ($terminacionesArista as $key => $terminacion) : ?>

                    <option class="" value="<?php echo $terminacion->id ?>" ><?php echo $terminacion->nombre ?></option>
                <?php endforeach; ?>
                </select>
        <?php else: ?>
            <div class"alert alert-warning">No hay terminaciones disponibles para esta pieza</div>   
        <?php endif; ?> 
    </div>  
</div>

<div class="span3">
    <div class="span12">
        <strong>Canto</strong>
    </div>
    <div>
        <?php if( !empty($terminacionesCanto) ): ?>
            <select id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
                <option value="">Sin tratamiento de canto</option>
            
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

<div class="span3">
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
        //alert('hola: '+$(this).attr('id'));
         $('#pregunta3').attr('style','display:none');
        $('#ok3').attr('style','display:block');
        $('#Valorpieza_id_terminacion').val($(this).attr('value'));
        $('#destino').show('slow');

    });
   
        $('#biselados').click(function(){
       $('#tamañobiselados').show('slow');

   });

";
echo "</script>";
?>

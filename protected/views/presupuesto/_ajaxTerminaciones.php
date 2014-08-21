


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


           
 

 <div class="span4 pa">
 <?php if( !empty($terminaciones) ): ?>
                <select id="Valorpieza_id_term" name="Valorpieza[id_ternimacion]">
                    <option value="">Selecciona terminacion</option>
                    <?php foreach ($terminaciones as $key => $terminacion) : ?>
                        <option class="" value="<?php echo $terminacion->id ?>" ><?php echo $terminacion->nombre ?></option>
                    <?php endforeach; ?>
                </select>
            <?php else: ?>
                <div class"alert alert-warning">No hay terminaciones disponibles para esta pieza</div>   
            <?php endif; ?> 

</div>

    <div class="span4">
        <label for="largo">Largo:&nbsp;</label>
        <input type="text" id="largo" name="largo" style="width:40px">
    </div>
    <div class="span4 marginceroi">
        <label for="ancho">Ancho:&nbsp;</label>
        <input type="text" id="ancho" name="" style="width:40px"><br>
    </div>
    <div class="span4">
        <select id="grosor" style="width:75px">
         	<option value="0">Grosor</option>
         	<option value="1">2 cm</option>
            <option value="2">3 cm</option>
         </select>
    </div>
             
          




    <?php $url_action2 = CHtml::normalizeUrl(array('/presupuesto/ajaxPrecioHuella')); ?>
    <?php echo "<script>";
    echo "




        $('#grosor').change(function(){  
                        
                idtipo = $('#Valorpieza_id_tipo').val();
                idgrosor = $('#grosor').val();
                largo = $('#largo').val();
                ancho = $('#ancho').val();
                
                $.ajax({
                    url: '$url_action2', type: 'post', 
                    data: { largo: largo, ancho: ancho,id_tipo: idtipo, grosor : idgrosor},
                    success: function(response){
                        $('#preciounitario').html(response);
                    },
                    error: function(e){
                        $('#preciounitario').html(e.responseText);
                   }
            
        });
    //$('html, body').animate({scrollTop: $('#terminaciones').offset().top +300 }, 'slow');
    $('#terminaciones').show('slow');
    $('#pregunta2').attr('style','display:none');
    $('#ok2').attr('style','display:block');

    
});
";
echo "</script>";
?>


<?php $url_action3 = CHtml::normalizeUrl(array('/presupuesto/ajaxTerminaciones')); ?>
    <?php echo "<script>";
    echo "
        $('#grosor').change(function(){  
            $('#preciounitario').attr('style','display:block');
            idmaterial = $('#Valorpieza_id_material').val();
            idpieza = $('#Valorpieza_id_pieza').val();
            idtamano = 18;
            $.ajax({
                url: '$url_action3', type: 'post', 
                data: { id_material: idmaterial, id_pieza: idpieza, id_tamano: idtamano },
                success: function(response){

                    $('#term').html(response);
                },
                error: function(e){
                    $('#term').html(e.responseText);
                }
            });
   
});
";
echo "</script>";
?>

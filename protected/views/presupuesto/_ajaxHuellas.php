
<div class="span4">
    <label for="largo">Largo:&nbsp;</label>
    <input type="text" id="largo" name="largo" style="width:40px">
</div>
<?php if( $id_pieza == 3 ){?>
    <input type="hidden" id="Valorpieza_id_tamano" name="Valorpieza[id_tamano]" value="18">
    <div class="span4 marginceroi">
        <label for="ancho">Ancho:&nbsp;</label>
        <input type="text" id="ancho" name="ancho" style="width:40px"><br>
    </div>
<?php   } else { ?>
    <input type="hidden" id="Valorpieza_id_tamano" name="Valorpieza[id_tamano]" value="19">
    <input type="hidden" id="ancho" name="ancho" value="15">
<?php   } ?>

<div class="span4">
    <select id="grosor" name="grosor" style="width:75px">
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
            idpieza = $('#Valorpieza_id_pieza').val(); 
            idgrosor = $('#grosor').val();
            largo = $('#largo').val();
            ancho = $('#ancho').val();
             
            $.ajax({
                url: '$url_action2', type: 'post', 
                data: { largo: largo, ancho: ancho, id_tipo: idtipo, grosor : idgrosor, id_pieza: idpieza },
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
            idtamano = $('#Valorpieza_id_tamano').val();
            
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

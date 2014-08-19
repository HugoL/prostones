<?php $url_action2 = CHtml::normalizeUrl(array('/presupuesto/ajaxPreciounitario')); ?>
    <?php echo "<script>";
    echo "
        $('#Valorpieza_id_tamano').change(function(){   
            idtipo = $('#Valorpieza_id_tipo').val();
            idtamano = $('#Valorpieza_id_tamano').val();
            $.ajax({
                url: '$url_action2', type: 'post', 
                data: { id_tipo: idtipo, id_tamano: idtamano },
                success: function(response){
                    $('#preciounitario').html(response);
                },
                error: function(e){
                    $('#preciounitario').html(e.responseText);
                }
            });
    $('html, body').animate({scrollTop: $('#terminaciones').offset().top +300 }, 'slow');
    $('#terminaciones').show('slow');
    $('#pregunta2').attr('style','display:none');
    $('#ok2').attr('style','display:block');
});
";
echo "</script>";
?>

<div class="">
	<div class="span4 pa" id="tamanos">

         	<?php if( !empty($tamanos) ): ?>
         		<select id="Valorpieza_id_tamano" name="Valorpieza[id_tamano]">
         			<option value="">Selecciona tamaño</option>
         			<?php foreach ($tamanos as $key => $tamano) : ?>
         				<option class="optiontamano <?php echo "tamano".$tamano->id_pieza; ?>" value="<?php echo $tamano->id; ?>"><?php echo $tamano->nombre ?></option>
         			<?php endforeach; ?>
         		</select>
            <?php else: ?>
            	<div class"alert alert-warning">No hay tamaños disponibles para esta pieza</div>   
            <?php endif; ?> 




        </div>
</div>
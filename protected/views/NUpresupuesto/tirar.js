 $('#Valorpieza_id_pieza').change(function(){
        alert('kooo');
        idtipo = $('#Valorpieza_id_tipo').val();
        idpieza = $('#Valorpieza_id_pieza').val();
        $.ajax({
                url: '/yii/prostones/index.php/presupuesto/ajaxTamanos', type: 'post', 
                data: { id_tipo: idtipo, id_pieza: idpieza },
                success: function(response){
                    $('#tamanos').html(response);
                },
                error: function(e){
                    $('#tamanos').html(e.responseText);
                }
            });

      
        $('#Valorpieza_id_tamano').val('');
        $('#tamanos').show('slow');
        $('.optiontamano').attr('style','display:none');
        $('.tamano'+$('#Valorpieza_id_pieza').val()).attr('style','display:block');
        if( $('#Valorpieza_id_pieza').val() == 1 ){
            $('#medida').html('m2.');
        }else{
            $('#medida').html('m.');
        }  
    

        $('#Valorpieza_id_tamano').change(function(){   


            idtipo = $('#Valorpieza_id_tipo').val();
            idtamano = $('#Valorpieza_id_tamano').val();
            $.ajax({
                url: '/yii/prostones/index.php/presupuesto/ajaxPreciounitario', type: 'post', 
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



});
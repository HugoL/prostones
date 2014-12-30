

<div class="presprecio" id="preuni">
	
	Precio base: <strong>
	<span class="texto16naranja"><?php 	$precioajax = round($precioajax,2);
			echo preg_replace('/\./', ',', $precioajax);
			
	?> </span></strong>
	<?php 
	if ($tipo == 1){
			echo '€/m<sup>2</sup>';
			}else{
				echo '€/m';
			}
			?><br>
			
<span class="textodiez"><?php echo $nombretipo;	?> de  <?php echo $tamano;	?>. <?php echo $nombre;	?></span>

</div>
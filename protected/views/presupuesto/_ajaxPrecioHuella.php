<div class="presprecio" id="preuni" align="center">Precio por unidad: <strong>
	<span class="texto16naranja"><?php 	$area= round($area,2);
		echo preg_replace('/\./', ',', $area);
	?> </span></strong> € <br>
	<span class="textodiez"><?php echo $nombrepieza;?> de <?php echo $largohuella*100;?>x<?php echo $anchohuella*100;?>x<?php echo $grosor+1;?>. <?php echo $nombre;?></span>	
</div>
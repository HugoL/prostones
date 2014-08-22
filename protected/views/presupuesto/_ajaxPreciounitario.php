

<div class="label label-warning" id="preuni">Precio unitario: <strong>
	<?php 	$precioajax = round($precioajax,2);
			echo preg_replace('/\./', ',', $precioajax);
	?>
€</strong></div>
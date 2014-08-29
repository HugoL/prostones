

<div class="presprecio" id="preuni" align="center">Precio: <strong>
	<font color="#134263"><?php 	$precioajax = round($precioajax,2);
			echo preg_replace('/\./', ',', $precioajax);
			
	?> </font>
	<?php if ($tipo == 1){
			echo '€/m<sup>2</sup>';
			}else{
				echo '€/m';
			}
			?>

</strong></div>
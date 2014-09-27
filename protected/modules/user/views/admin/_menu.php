<ul class="actions">
<?php 
	if (count($list)) {
		foreach ($list as $item)
			echo "<li>".$item."</li>";
	}
?>
	<li><?php echo CHtml::link(UserModule::t('Lista de Usuarios'),array('/user')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Control de Usuarios'),array('admin')); ?></li>
	<li><?php echo CHtml::link(UserModule::t('Control contenido cuentas de usuario'),array('profileField/admin')); ?></li>
</ul><!-- actions -->
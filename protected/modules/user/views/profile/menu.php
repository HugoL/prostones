<ul class="actions">
<?php 
if(UserModule::isAdmin()) {
?>
<strong>Usuarios</strong>
<li><?php echo CHtml::link(UserModule::t('Control de Usuarios'),array('/user/admin')); ?></li>
<br>
<strong>Documentos</strong>
<li><?php echo CHtml::link(UserModule::t('Crear Documentos'),array('/user/documento/create')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Administrar Documentos'),array('/user/documento/admin')); ?></li>
<br>
<strong>Pedidos</strong>
<li><?php echo CHtml::link(UserModule::t('Crear Pedido'),array('/user/pedido/create')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Administrar Pedidos'),array('/user/pedido/admin')); ?></li>
<?php 
} else {
?>
<!--<li><?php //echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>-->

<strong>Pedidos</strong>
<br>
- Lista de pedidos
<br>
- ¿Donde esta mi pedido?
<br>


<?php
}
?>
<br>
<strong>Administrar cuenta</strong>
<li><?php echo CHtml::link(UserModule::t('Cuenta'),array('/user/profile')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Editar'),array('edit')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Cambiar contraseña'),array('changepassword')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Cerrar sesión'),array('/user/logout')); ?></li>
</ul>
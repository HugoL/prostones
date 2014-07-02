<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Colocación de materiales';
/*$this->breadcrumbs=array(
	'Reformas',
);*/
?>
<div class="span1 iconoser">
			<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/colocacion.png">
			</div class="span10"><h1>Colocación de materiales</h1> 

<div class="clearfix">&nbsp</div>

<div class="span6">
<p>
​Si no dispone de un profesional que le instale nuestros materiales, o quiere que nos encarguemos de realizar la colocación de los mismos, la plataforma proSton (12 talleres repartidos en todas las regiones), posee algún equipo de colocación cerca de su domicilio.

Se trata de colocadores que pueden medir, confeccionar las hojas de elaboración,  colocar y posteriormente pulir (si fuese necesario), los materiales que nos ha adquirido. Su profesionalidad (todos son marmolistas con muchos años de experiencia), garantiza que su material quedará satisfactoriamente colocado.

Si usted quiere que le presupuestemos la colocación o necesite una medición previa del material que va a necesitar, solo tiene que solicitarlo en el cuestionario que hemos colocado al final de la hoja (si posee planos o fotos de su obra, nos ayudaria que los adjuntase). 

proSton.es contactará con usted para aclarar cuales son sus necesidades y todo tipo de detalle para confeccionar inmediatamente su presupuesto.


</p>
</div>
<div class="span5">
<form action="subirpropuesta.php" method="post" enctype="multipart/form-data"> 
   	 <b>Correo electronico:</b> 
   	 <br> 
   	 <input type="text" name="correo" size="20" maxlength="100"> 
   	  <br><br>
   	 <b>Comentarios:</b> 
   	 <br> 
   	 <textarea name="cadenatexto" cols="50" rows="4" > </textarea>

 
   	 <br><br><br>
   	 <input type="hidden" name="MAX_FILE_SIZE" value="100000"> 
   	 <br> 
   	 <br> 
   	 <b>Enviar un nuevo archivo: </b> 
   	 <br> 
   	 <input name="userfile" type="file"> 
   	 <br> 
   	 <input type="submit" value="Enviar"> 
</form>
</div>
<div class="clearfix">&nbsp</div>





<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */


$this->pageTitle= 'Contacta con nosotros - '. Yii::app()->name;

Yii::app()->clientScript->registerMetaTag("Contacta con nosotros. Necesita construir su idea. Nosotros se la hacemos realidad", 'description');
Yii::app()->clientScript->registerMetaTag("Contacto, formulario,  Marmol , Granito ,Barato, Precio, Obra, Reforma, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Granito proston,  Marmolistas", 'keywords');

?>

<h1>Contacta con nosotros</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<div class="span4">
<p>
Si desea colocar un material o desea desarrollar una idea consultenos. Nos comprometemos a responderte en el menor tiempo posible.</p>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"></p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="span12 form_contacto">
		<div class="span4 ">
			<div><h2>Asunto de la consulta</h2></div>
			<div class="row">			
			<div>Diganos que necesita.</div>
			<?php // echo $form->labelEx($model,'Seleccione que necesita'); ?>
			<?php echo	$form->dropDownList($model,'subject',array('Reforma'=>'Reforma','Colocación'=>'Colocación','Pedir Material'=>'Pedir Material','Incidencia'=>'Incidencia','Sugerencia'=>'Sugerencia','Otros'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
			<?php echo $form->error($model,'subject'); ?>
			</div>


			<div class="row" id="reformas_colocaciones" >
				<?php //echo $form->labelEx($model,'Diganos donde sería'); ?>
				<div>¿Dónde?</div>
				<?php echo	$form->dropDownList($model,'donde',array('1'=>'Piso','2'=>'Unifamiliar','3'=>'Oficina','4'=>'Local comercial','5'=>'Fábrica','6'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
				<?php echo $form->error($model,'donde'); ?>
			</div>


			<div class="row" id="incidencia_sugerencia" style="display:none">
				<?php //echo $form->labelEx($model,'Diganos lo que piensa'); ?>
				<div>¿Sobre que?</div>
				<?php echo	$form->dropDownList($model,'donde2',array('1'=>'Material','2'=>'Transporte','3'=>'Web','4'=>'Servicios','5'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
				<?php echo $form->error($model,'donde2'); ?>
			</div>

				

			<div class="row" id="texto" >
			<div>Diganos de que se trata. *</div>
				<?php //echo $form->labelEx($model,'body'); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'body'); ?>
			</div>
		</div>


		<div class="span6 contact1024">
			<div class="span4"><h3>Datos de contacto</h3>(Los campos con * son obligatorios.)</div>

			<div class="row span12">
				<div class="row-fluid span4">
				<div>Nombre *</div>
				<?php //echo $form->labelEx($model,'nombre'); ?>
				<?php echo $form->textField($model,'name',array('size'=>8,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'name'); ?>
				</div>
				<div class="row-fluid span4">
				<div>Apellidos</div>
				<?php //echo $form->labelEx($model,'apellidos'); ?>
				<?php echo $form->textField($model,'apellidos',array('style'=>'width:100%')); ?>
				<?php echo $form->error($model,'apellidos'); ?>
				</div>
			</div>
			<div class="row-fluid span12">
				<div class="span8">
				<div>Dirección</div>
				<?php //echo $form->labelEx($model,'Direccion'); ?>
				<?php echo $form->textField($model,'direccion',array('style'=>'width:100%')); ?>
				<?php echo $form->error($model,'direccion'); ?>
				</div>
				
			</div>

			<div class="row-fluid span12">
				<div class="span2">
				<div>Codigo postal</div>
				<?php //echo $form->labelEx($model,'codigo postal'); ?>
				<?php echo $form->textField($model,'codigopostal',array('style'=>'width:100%')); ?>
				<?php echo $form->error($model,'codigopostal'); ?>
				</div>
				<div class="span3">
				<div>Localidad</div>
				<?php // echo $form->labelEx($model,'localidad'); ?>
				<?php echo $form->textField($model,'localidad',array('style'=>'width:100%')); ?>
				<?php echo $form->error($model,'localidad'); ?>
				</div>
				<div class="span3">
				<div>Provincia</div>
				<?php // echo $form->labelEx($model,'provincia'); ?>
				<?php echo $form->textField($model,'provincia',array('style'=>'width:100%')); ?>
				<?php echo $form->error($model,'provincia'); ?>
				</div>
			</div>

			<div class="row-fluid span12">
				<div class="span4">
				<div>E-mail *</div>
				<?php //echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
				</div>
				<div class="span4">
				<div>Telefono</div>
				<?php //echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono'); ?>
				<?php echo $form->error($model,'telefono'); ?>
				</div>
			</div>

			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="row-fluid span12">
			
			<div>Código de verificación</div>
			<?php //echo $form->labelEx($model,'verifyCode'); ?>
			<div>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			</div>Por favor, rellene el código de verificaión con la imágen de su derecha.
			<br/>Puede usar mayusculas y minusculas indistintamente.
			<?php echo $form->error($model,'verifyCode'); ?>
			</div>
			
	</div>
	<?php endif; ?>

	<div class="row buttons span7 offset5" >
		<?php echo CHtml::submitButton('Enviar'); ?>
	</div>
		</div>
		
	

	

<?php $this->endWidget();?>

<div class="clearfix">&nbsp;</div>
</div><!-- form -->

<?php endif; ?>


<script>

$(document).ready(function($){
	 $("#ContactForm_subject").change(function(){
        
          if( $('#ContactForm_subject').val() == 'Reforma'  || $('#ContactForm_subject').val() == 'Colocación'){
            $("#reformas_colocaciones").show('slow');
            $("#texto").show('slow');;
             $("#incidencia_sugerencia").hide();

            }else if( $("#ContactForm_subject").val() == 'Incidencia'  || $("#ContactForm_subject").val() == 'Sugerencia'){
        	$("#incidencia_sugerencia").show('slow');  
        	$("#reformas_colocaciones").hide();   
            $("#texto").show('slow');

        }else{
        	$("#reformas_colocaciones").hide();  
        	 $("#incidencia_sugerencia").hide();  
            $("#texto").show('slow');

        }
        
     
    });
});

</script>


  
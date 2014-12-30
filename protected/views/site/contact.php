<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */


$this->pageTitle= 'Contacta con nosotros -  www.'. Yii::app()->name;

Yii::app()->clientScript->registerMetaTag("Contacta con nosotros. Necesita construir su idea. Nosotros se la hacemos realidad", 'description');
Yii::app()->clientScript->registerMetaTag("Contacto, formulario,  Marmol , Granito ,Barato, Precio, Obra, Reforma, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Granito proston,  Marmolistas", 'keywords');

?>

<h1 id="tituloseccion">Contacta con nosotros</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

	<?php Yii::app()->getClientScript()->registerScript("google contacto finalizado",
    "  
<!-- Google Code for Consulta Conversion Page -->
<script>      
/* <![CDATA[ */
var google_conversion_id = 965422513;
var google_conversion_language = 'en';
var google_conversion_format = '2';
var google_conversion_color = 'ffffff';
var google_conversion_label = 'YiXsCMKj6VcQsduszAM';
var google_remarketing_only = false;
/* ]]> */
</script>
<script type='text/javascript' src='//www.googleadservices.com/pagead/conversion.js'>
</script>

    ")  
    ?>

<noscript>
<div style='display:inline;'>
<img height='1' width='1' style='border-style:none;' alt='' src='//www.googleadservices.com/pagead/conversion/965422513/?label=YiXsCMKj6VcQsduszAM&amp;guid=ON&amp;script=0'/>
</div>
</noscript>











<?php else: ?>


<div class="span12">
	<div class="span3" >
		<div class="span12" style="border:3px solid #d44711; ">
			<p style="padding:5px"><strong><span style="font-size:18px; color:#d44711;">Recibe asesoramiento gratuito</span></strong><br><span class="textodiez">Rellene este formulario si necesita colocar un matarial o desarrollar una idea. Nos comprometemos a responderte en el menor tiempo posible.</span></p>
		</div>
		<div class="clearfix">&nbsp;</div>
		<div class="span12" style="border:3px solid #134263; margin-left:0px; ">
			<p style="padding:5px"><strong><span style="font-size:18px; color:#134263;">Cuentanos tu idea o proyecto</span></strong><br><span class="textodiez">proSton.es  le ofrece un analisis específico a sus necesidades.</span></p>
		</div>
	</div>

	<div class="span8" id="espacioformulario">
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
				<div class="span4">
					<div class="span12 ">
						<div class="row">			
							<div class="tituloform textodiez">
								¿QUE NECESITA?
							</div>
							<?php // echo $form->labelEx($model,'Seleccione que necesita'); ?>
							<?php echo	$form->dropDownList($model,'subject',array('Reforma'=>'Reforma','Colocación'=>'Colocación','Pedir Material'=>'Material','Incidencia'=>'Incidencia','Sugerencia'=>'Sugerencia','Otros'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
							<?php echo $form->error($model,'subject'); ?>
						</div>
						<div class="row" id="reformas_colocaciones" >
							<?php //echo $form->labelEx($model,'Diganos donde sería'); ?>
							<div class="tituloform textodiez">
								¿DÓNDE?
							</div>
							<?php echo	$form->dropDownList($model,'donde',array('1'=>'Piso','2'=>'Unifamiliar','3'=>'Oficina','4'=>'Local comercial','5'=>'Fábrica','6'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
							<?php echo $form->error($model,'donde'); ?>
						</div>
						<div class="row" id="incidencia_sugerencia" style="display:none">
							<?php //echo $form->labelEx($model,'Diganos lo que piensa'); ?>
							<div class="tituloform textodiez">
								¿SOBRE QUÉ?
							</div>
							<?php echo	$form->dropDownList($model,'donde2',array('1'=>'Material','2'=>'Transporte','3'=>'Web','4'=>'Servicios','5'=>'Otros'), array('options' => array('1'=>array('selected'=>true))));?>
							<?php echo $form->error($model,'donde2'); ?>
						</div>
						<div class="row" id="texto" >
							<div class="tituloform textodiez">
								DIGANOS DE QUE SE TRATA *
							</div>
							<?php //echo $form->labelEx($model,'body'); ?>
							<?php echo $form->textArea($model,'body',array('rows'=>6)); ?>
							<?php echo $form->error($model,'body'); ?>
						</div>
					</div>
				</div>
				<div class="span8">
					<div class="span12">
						<div class=" span6">
							<div class="tituloform textodiez">
								NOMBRE *
							</div>
							<?php //echo $form->labelEx($model,'nombre'); ?>
							<?php echo $form->textField($model,'name',array('size'=>8,'maxlength'=>255)); ?>
							<?php echo $form->error($model,'name'); ?>
						</div>
						<div class="span6" id="espacioizquierda">
							<div class="tituloform textodiez">
								APELLIDOS
							</div>
							<?php //echo $form->labelEx($model,'apellidos'); ?>
							<?php echo $form->textField($model,'apellidos',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'apellidos'); ?>
						</div>
					</div>
					<div class=" span12 lineaform" >
						<div class="span12">
							<div class="tituloform textodiez">
								DIRECCIÓN
							</div>
							<?php //echo $form->labelEx($model,'Direccion'); ?>
							<?php echo $form->textField($model,'direccion',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'direccion'); ?>
						</div>
					</div>

					<div class=" span12 lineaform">
						<div class="span4">
							<div class="tituloform textodiez">
								CÓDIGO POSTAL
							</div>
							<?php //echo $form->labelEx($model,'codigo postal'); ?>
							<?php echo $form->textField($model,'codigopostal',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'codigopostal'); ?>
						</div>
						<div class="span4">
							<div class="tituloform textodiez">
								LOCALIDAD
							</div>
							<?php // echo $form->labelEx($model,'localidad'); ?>
							<?php echo $form->textField($model,'localidad',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'localidad'); ?>
						</div>
						<div class="span4">
							<div class="tituloform textodiez">
								PROVINCIA
							</div>
							<?php // echo $form->labelEx($model,'provincia'); ?>
							<?php echo $form->textField($model,'provincia',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'provincia'); ?>
						</div>
					</div>

					<div class="span12 lineaform">
						<div class="span6">
							<div class="tituloform textodiez">
								E-MAIL *
							</div>
							<?php //echo $form->labelEx($model,'email'); ?>
							<?php echo $form->textField($model,'email',array('size'=>8,'maxlength'=>255)); ?>
							<?php echo $form->error($model,'email'); ?>
						</div>
						<div class="span6">
							<div class="tituloform textodiez">
								TELÉFONO
							</div>
							<?php //echo $form->labelEx($model,'telefono'); ?>
							<?php echo $form->textField($model,'telefono',array('style'=>'width:100%')); ?>
							<?php echo $form->error($model,'telefono'); ?>
						</div>
					</div>

					<?php if(CCaptcha::checkRequirements()): ?>
					<div class="span12 lineaform">
						<div class="tituloform textodiez">
							CÓDIGO DE VERIFICACIÓN
						</div>
						<?php //echo $form->labelEx($model,'verifyCode'); ?>
						<div class="captcha">
							<?php echo $form->textField($model,'verifyCode'); ?>
							<span class="textodiez"><?php $this->widget('CCaptcha'); ?></span>
						</div>
						<div class="span12">
							<p class="textodiez">Por favor, rellene el código de verificaión con las letras azules que aparecen.
							<br/>Puede usar mayusculas y minusculas indistintamente.</p>
						</div>
						<?php echo $form->error($model,'verifyCode'); ?>
					</div>
				</div>
			</div>

			<?php endif; ?>

			<div class="row buttons span2 offset8" >
				<?php echo CHtml::submitButton('Enviar'); ?>
			</div>
		<?php $this->endWidget();?>	
		</div>
				
		
	</div>
	
</div>

<div class="clearfix">&nbsp;</div>

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


  
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacta con nosotros';
?>

<h1>Contact con nosotros</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Si desea colocar un material o desea desarrollar una idea consultenos</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Campos con  <span class="required">*</span>  son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div><h2>Datos de la reforma</div>
	<div class="row">
		<?php echo $form->labelEx($model,'donde'); ?>
		<?php echo $form->textField($model,'donde'); ?>
		<?php echo $form->error($model,'donde'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'estado de la vivienda'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textField($model,'otros'); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'tipo de reforma'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div><h2>Datos de contacto</div>

	<div class="row ">
		<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>8,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div>
		<div>
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos'); ?>
		<?php echo $form->error($model,'apellidos'); ?>
		</div>
	</div>
	<div class="row ">
		<div>
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('style'=>'width:44%')); ?>
		<?php echo $form->error($model,'direccion'); ?>
		</div>
		
	</div>

	<div class="row">
		<div>
		<?php echo $form->labelEx($model,'codigo postal'); ?>
		<?php echo $form->textField($model,'codigopostal',array('style'=>'width:8%')); ?>
		<?php echo $form->error($model,'codigopostal'); ?>
		</div>
		<div>
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad'); ?>
		<?php echo $form->error($model,'localidad'); ?>
		</div>
		<div>
		<?php echo $form->labelEx($model,'provincia'); ?>
		<?php echo $form->textField($model,'provincia'); ?>
		<?php echo $form->error($model,'provincia'); ?>
		</div>
	</div>

	<div class="row">
		<div>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>
		<div>
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</div>
	</div>

	

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>



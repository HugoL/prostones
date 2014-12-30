<?php
/* @var $this PresupuestoController */
/* @var $model Presupuesto */

$this->breadcrumbs=array(
	'Presupuestos'=>array('index'),
	$model->id,
);
?>

<h1>Presupuesto generado</h1>

<?php if(Yii::app()->user->hasFlash('contact')):?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>
        <?php endif; ?>

         <?php if(Yii::app()->user->hasFlash('error')):?>
            <div class="alert alert-error">
                <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
        <?php endif; ?>

<p><div class="alert alert-success">Se ha generado el presupuesto</div>

Y tal y cual...
</p>
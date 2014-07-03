<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Materials',
);

/*$this->menu=array(
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);*/
?>

<h1>Simulador</h1>

<?php
//Galeria de imágenes
$imageArray = array(
    array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image1.jpg', 'alt'=>'first image is missing', 'htmlOptions'=>array('title'=>'First image')),
    array(Yii::app()->request->baseUrl.Yii::app()->params['images'].'image2.jpg', 'htmlOptions'=>array('title'=>'Second image')),
);
?>
<div class="row">
    <div class="span2 well" id="zonas" style="display:none">       
        <div class="span2">           
            Suelo <img class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/star-icon.png">
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="span2">
        Paredes <img class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/star-icon.png">        
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="span2">
        Rodapié <img class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/star-icon.png">
        </div>        
    </div>
    <div class="span10">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Simulador de ambientes',
)); ?>
 <center><p><img class="imgmaterial map" usemap="#features" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images']; ?>base.jpg"/></p></center>
 <map name="features">
    <!-- crear funcion que al cambiar area cambie el objetivo de la seleccion-->
    <a onclick="newwindow()"><area id="area"  shape="poly" coords="638,18,320,60,320,60,320,343,638,423,638,18,638,18" href="#" alt="Pared D" class="group" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}'></a>
    <area id="area2" shape="poly" coords="0,18,320,60,320,60,320,343,0,423,0,18,0,18" href="#" alt="Pared I" class="group" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}'>
</map>
<?php 
//slider de imágenes
/*$this->widget('application.extensions.galleria.Galleria', array(
                    'images'=>$imagenes,
                    'theme'=>'dots',                    
                    'options'=>array(
                    	'autoplay'=>false,
                        'image_margin'=>25,
                        'transition'=>'slide',
                        'height'=>160,
                        'width'=>160,
                        'responsive'=>true,
                        'queue'=>true,
                        'url'=>array('simulador/mierda'),
                    ),
                )
            );*/
?>
    </div>
</div><!-- row -->
<?php $this->endWidget(); ?>


<?php if( !empty($materiales) ){ ?>
     <div class="well">
    <?php foreach ( $materiales as $key => $material ){ ?>
        <li class="span1">
            <a href="tipos/id/<?php echo $material->id; ?>" class="thumbnail" rel="tooltip" data-title="Tooltip">
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$material->imagen; ?>" alt="<?php echo $material->nombre; ?>"><center><?php echo $material->nombre; ?></center>
            </a>
        </li>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>
    </div>
<?php } ?>

<?php if( !empty($tipos) ){ ?>
    <div class="well">
    <?php foreach ( $tipos as $key => $tipo ){ ?>    
        <li class="span1">
            <div class="thumbnail tipos">
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$tipo->imagen; ?>" alt="<?php echo $tipo->nombre; ?>"><center><?php echo $tipo->nombre; ?></center>
            </div>            
        </li>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>
    </div>
<?php } ?>

<?php //$this->debug($dataProvider); ?>

<?php //print_r($materiales); ?>
<script>
$(".tipos").click(function(){
   $("#zonas").fadeIn("slow");
});
</script>
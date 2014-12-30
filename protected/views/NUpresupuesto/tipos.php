<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presupuesto',
);

/*$this->menu=array(
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);*/
?>

<h1>Presupuesto</h1>

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
</div><!-- row -->

<?php if( !empty($tipos) ){ ?>
    <div class="well span11">
    <?php foreach ( $tipos as $key => $tipo ){ ?>    
        <li class="span2">
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
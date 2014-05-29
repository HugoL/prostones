<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!--<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p><?php $this->widget('bootstrap.widgets.TbButton', array(  
    'type'=>'warning',
    'label'=>'Simulador',
    'size'=>'large',
    'htmlOptions'=>array('id'=>'buttonStateful'),
    'url'=>array('simulador/index'),
)); ?>
</p>
-->

<div class="clearfix">&nbsp</div>
<div class="span11 offset1 row">  

	<div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
		<div>Rehabilitación y reformas</div>
	</div>  

	<div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
		<div>Pisos y casas unifamiliares</div>
	</div>  
 <div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></img>
		<div>Cocinas y baños</div>
	</div>  
   <div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
		<div>Construcción y edificacion</div>
	</div> 
	 <div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
		<div>Paisajismos y Jardineria</div>
	</div>
</div>




<!--
*********************************
Slider principal
*********************************
-->
<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>

<div id="sliderContainer">

    <div id="mySlides">

        <div id="slide1" class="slide">    
    
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 1 jFlow Plus" />
    
            <div class="slideContent">
                <h3>You Asked, jFlow Delivered</h3>
                <p>It's all about giving back to the development community.</p>
           
            </div>
    
        </div>    	
    
        <div id="slide2" class="slide">
    
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 2 jFlow Plus" />
    
            <div class="slideContent">
                <h3>W3C Valid</h3>
                <p>Are you a stickler for writing valid code?  So is jFlow.</p>
             </div>
    
        </div>   
    
        <div id="slide3" class="slide">
    
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent"><h3>Frequent Code Updates</h3>
            <p>This slider is actively developed and used by thousands of websites</p></div>
    
        </div>
        
        <div id="slide4" class="slide">
    
            <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Notice the Pagination?</h3>
                <p>Click on the paging buttons below to navigate.</p>
            </div>
    
        </div>

	</div>



<div id="myController">

   <span class="jFlowControl">1</span>

   <span class="jFlowControl">2</span>

   <span class="jFlowControl">3</span>
   
   <span class="jFlowControl">4</span>

</div>



<div class="jFlowPrev"></div>

<div class="jFlowNext"></div>

</div>


<!--
*********************************
Fin slider principal
*********************************
-->



<div class="clearfix"></div>





<div class="titulo span11">Servicios</div>

<div class="row span11"> 

	<div class=" span6">
		<div class="clearfix"></div>
		<div class="divHome span12 gris"><h3>Simulador</h3></div>
		<div class="divHome span12 gris"><h3>Stock</h3></div>
		<div class="divHome span12 gris"><h3>Ofertas</h3></div>
		<div class="divHome span12 gris"><h3>Recomendaciones</h3></div>
		<div class="divHome span12 gris"><h3>Asesoramiento</h3></div>
		
	</div>

	<div class=" span6">
		<div class="clearfix"></div>
		
		<div class="divHome span12 gris"><h3>Materiales con medidas estándar y bajo pedido.</h3></div>
		<div class="divHome span12 gris"><h3>Herramientas digitales</h3></div>
		<div class="divHome span12 gris"><h3>Asesoramiento</h3></div>
		<div class="divHome span12"><h3>Transporte a domicilio.</h3></div>
		<div class="divHome span12"><h3>Colocación de los materiales adquiridos en nuestra Web.</h3></div>

	</div>

</div>


<div class="titulo span11">Plataforma Proston</div>



<div class=" span10 row">  

	<div class=" span2" >  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	</div>  
	<div class=" span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
	</div>  
	<div class=" span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	</div>  
	<div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	</div>  
	<div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"> 
	</div>  
	<div class="span2">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	</div>  
  
</div>
		
            
            
	



<div class="clearfix"></div>
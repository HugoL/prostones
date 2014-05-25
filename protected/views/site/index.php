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
<div class="clearfix"></div>

<div class=" span11 row">  

	<div class=" span2">  
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


<div class="row-fluid span12">  

<div class="divHome span2">  
<p><h2>Rehabilitación y reformas</h2></p>   
</div>  
<div class="divHome span2">  
<p><h2>Pisos y casas unifamiliares</h2></p>   
</div>  
<div class="divHome span2">  
<p><h2>Cocinas y baños</h2></p>   
</div>  

<div class="divHome span2">  
<p><h2>Construcción y edificacion</h2></p>   
</div>  
<div class="divHome span2">  
<p><h2>Paisajismos y Jardineria </h2></p>   
</div>  
 <div class="divHome span1">  
<p><h2>??????</h2></p>   
</div>   
</div>


<!--
*********************************
Slider principal
*********************************
-->
<div class="clearfix"></div>
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




		
            
            <div class="span11">
				
				Plataforma proston
				<ul id="carousel" class="elastislide-list">

					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="image03" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="image03" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="image03" /></a></li>
				</ul>
				<!-- End Elastislide Carousel -->

				
			</div>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['js'] ?>/js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['js'] ?>/js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>



<div class="clearfix"></div>
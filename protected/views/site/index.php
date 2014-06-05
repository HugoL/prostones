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


<div class="span12" style="margin-top:10px;margin-left:10px;">  

	<div class="span2 enl" style="margin-left:0px;">  
		<a href="#"><img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg"></a>
		
	</div>  

	<div class="span2 enl" style="margin-left:15px;">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg">
		
	</div>  
 <div class="span2 enl" style="margin-left:15px;">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg"></img>
		
	</div>  
   <div class="span2 enl" style="margin-left:15px;">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg">
		
	</div> 
	 <div class="span2 enl" style="margin-left:15px;">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa.jpg">
		
	</div>
	 <div class="span2 enl" style="margin-left:15px;">  
		<img  width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg">
		
	</div>
</div>




<!--
*********************************
Slider principal
*********************************
-->
<div class="clearfix">&nbsp</div>


<div class="span12">
<div class="span9">
<div id="sliderContainer">

    <div id="mySlides">

        <div id="slide1" class="slide">    
    
            <img width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 1 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Catalogo de materiales</h3>
                <p>Completa selección de los mejores materiales </p>
           
            </div>
    
        </div>    	
    
        <div id="slide2" class="slide">
    
            <img width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 2 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Simulador</h3>
                <p>Nuestro simulador le ayudara a tomar decisiones</p>
             </div>
    
        </div>   
    
        <div id="slide3" class="slide">
    
            <img  width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent"><h3>Presupuestos a medida</h3>
            <p>Consgiga los meores precios del mercado llevandose la máxima calidad</p></div>
    
        </div>
        
        <div id="slide4" class="slide">
    
            <img width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Envio a cualquier punto de España</h3>
                <p>Transporte nacional</p>
            </div>
    
        </div>

	</div>



<div id="myController">

   <span class="jFlowControl"></span>

   <span class="jFlowControl"></span>

   <span class="jFlowControl"></span>
   
   <span class="jFlowControl"></span>

</div>



<div class="jFlowPrev"></div>

<div class="jFlowNext"></div>

</div>


<!--
*********************************
Fin slider principal
*********************************
-->
</div>
<div class="span1"></div>
<div class="span2" style="margin-left:0">¿No encuentra lo que necesita? Consultanos... Podemos suministrale todas sus ideas o proyectos</div>
</div>


<div class="clearfix">&nbsp</div>



<div class="titulo span12">Servicios</div>

<div class="row span12"> 

	<div class=" span6">
		<div class="clearfix"></div>

		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Suministro</font><br><font style="color:#969696"> de materiales</font></h3></div>
			<div class="span5">Marmoles, granitos, piedras Calizas,etc con medidas estandar o bajo pedido.</div>
		</div>

		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Presupuesto online</font><br><font style="color:#969696"> Simulador de ambientes</font></h3></div>
			<div class="span5"> Ponemos a su disposicion herramientas digitales...</div>
		</div>
		
		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Transporte<br>a domicilio</h3></div>
			<div class="span5"> Envio de pedidos a cualquier punto de España</div>
		</div>

		
		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Colocación<br>de materiales</h3></div>
			<div class="span5">Todos los materiales adquiridos en la web pueden ser colocados por nuestro equipo</div>
		</div>

	
				
	</div>

	<div class=" span6">
		<div class="clearfix"></div>

			<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Stock<br>Material</h3></div>
			<div class="span5">asdafs    jjdsad aslkdj alksdj djsa.</div>
		</div>

		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Catalago <br>de materiales</h3></div>
			<div class="span5"> Ponemos a su disposicion herramientas digitales...</div>
		</div>
		
		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Asesoramiento<br></h3></div>
			<div class="span5">Información para que compre aquello que resuelva sus necesidades.</div>
		</div>

		
		<div class="divHome span12 gris">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"></div>
			<div class="span4"><h3>Atención<br>personalizada</h3></div>
			<div class="span5">Todos los talleres pertenecientes</div>
		</div>

		
		
		
		
		

	</div>

</div>

<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>
<div class="titulo span11">Plataforma Proston</div>



<div class=" span12 ">  

	<div class=" span1 plat" style="background-color:black" >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
		GALICIA
	</div>  
	<div class=" span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
	ASTURIAS
	CASTILLA LEON
	</div>  
	<div class=" span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	CANTABRIA
	PAIS VASCO
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	LA RIOJA
	NAVARRA
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"> CATALUÑA
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	EXTREMADURA
	</div>  
	<div class=" span1" >  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	MADRID
	CASTILLA LA MANCHA
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">ARAGON 
	</div>  
	<div class=" span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
	COMUNIDAD VALENCIANA
	</div>  
	<div class=" span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	ANDALUCIA ORIENTAL
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	ANDALUCIA OCCIDENTAL
	</div>  
	<div class="span1">  
		<img   alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">ALBACETE
		MURCIA 
	</div>  
	
  
</div>
		
            
            
	



<div class="clearfix"></div>
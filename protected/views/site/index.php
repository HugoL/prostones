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

<div class="span12" >  

	<div class="span2 enl" >  
		
<a href="http://localhost/yii/prostones/index.php/site/page?view=reformas"><img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg';"/></a>

	</div>  

	<div class="span2 enl" style="margin-left:1.4%;">  
<a href="#"><img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg';"/></a>

				
	</div>  
 <div class="span2 enl" style=" margin-left:1.4%;">  
 <a href="#"><img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg';"/></a>

				
	</div>  
   <div class="span2 enl" style=" margin-left:1.4%;">  
		
		<img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg';"/>
		
	</div> 
	 <div class="span2 enl" style=" margin-left:1.4%;">  
	 <img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa.jpg';"/>
		
		
	</div>
	 <div class="span2 enl" style=" margin-left:1.4%;">  
	 	<img width="250" height="35" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>

				
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

<div class="span2 parr2" style="margin-left:70px;"><p align="justify"><b>¿No encuentra lo que necesita? </b>
Consultenos... podemos suministrarle todas sus <a href="#"><font color="#fe7902">ideas y proyectos</font></a>.
<br><br>
<b>¿Ha encontrado en otra WEB lo que busca...., pero no se atreve a comprarlo?</b>
Aproveche nuestra profesionalidad y logistica para garantizarse la mejor relación <a href="#"><font color="#fe7902">calidad-precio y una eficiente entrega en su domicilio</font></a>.
</p>
	<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/lineadoble.png">

</div>
</div>


<div class="clearfix">&nbsp</div>



<div class="titulo span12" >Servicios</div>

<div class="row span12"> 

	<div class="span6">
		<div class="clearfix"></div>

		<div class="divHome span11">
		
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/suministro.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Elaboración</font><br><font style="color:#969696">y suministro</font></h3></div>
			<div class="span6 parr"><p>Marmoles, granitos, piedras Calizas,etc con medidas estandar o bajo pedido.</p></div>
		</div>

		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Presupuesto online</font><br><font style="color:#969696"> Diseñador virtual</font></h3></div>
			<div class="span6 parr"><p>Ponemos a su disposicion herramientas digitales... Crea tu idea con nuestro <a href="#"><font color="#fe7902">simulador</font></a>  y obten un presupuesto a tu medida con nuestra <a href="#">aplicación</a>.</p></div>
		</div>
		
		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Transporte hasta </font><br><font style="color:#969696"> su domicilio</font></h3></div>
			<div class="span6 parr"> <p> Envio de pedidos a cualquier punto de España</p></div>
		</div>

		
		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/colocacion.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Colocación de</font><br><font style="color:#969696"> materiales adquiridos</font></h3></div>
			<div class="span6 parr"><p> Todos los materiales adquiridos en la web pueden ser colocados por nuestro equipo</p></div>
		</div>

	
				
	</div>

	<div class=" span6">
		<div class="clearfix"></div>

			<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/stock.jpg"></div>
			<div class="span5"><h3><font style="color:#134263">Ofertas para el Stock</font><br><font style="color:#969696">Empresas del sector.</font></h3></div>
			<div class="span5 parr"><p> asdafs    jjdsad aslkdj alksdj djsa.</p></div>
		</div>

		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Catalago de</font> <br><font style="color:#969696">nuestros materiales</font></h3></div>
			<div class="span6 parr" > <p> Ponemos a su disposicion herramientas digitales...<a href="#" >Consulta el catálogo</a></p></div>
		</div>
		
		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/asesoramiento.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Asesoramiento</font><br><font style="color:#969696"> Ayuda técnica</font></h3></div>
			<div class="span6 parr"><p> Información para que compre aquello que resuelva sus necesidades.</p></div>
		</div>

		
		<div class="divHome span11">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Atención</font><br><font style="color:#969696">personalizada</font></h3></div>
			<div class="span6 parr"><p> Todos los talleres pertenecientes</p></div>
		</div>

		
		
		
		
		

	</div>

</div>

<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>
<div class="titulo span11" style="color:#b0cce9">Plataforma proSton</div>

<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>



<div class=" span12 ">  

	<div class="plat" style="background-color:#134263" >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
		<p style="color:white;">GALICIA</p>
	</div>  
	<div class=" plat" style="background-color:#b0cce9;">  
		<img   alt=""  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
	<p>ASTURIAS
	CASTILLA LEON</p>
	</div>  
	<div class=" plat" style="background-color:#134263">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p style="color:white;">CANTABRIA
	PAIS VASCO</p>
	</div>  
	<div class="plat" style="background-color:#b0cce9">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	<p>LA RIOJA
	NAVARRA</p>
	</div>  
	<div class="plat" style="background-color:#134263;">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"> <p style="color:white;">CATALUÑA</p>
	</div>  
	<div class="plat" style="background-color:#b0cce9">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p >EXTREMADURA</p>
	</div>  
	<div class=" plat" style="background-color:#134263;">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	<p style="color:white;">MADRID<br>
	CASTILLA LA MANCHA</p>
	</div>  
	<div class="plat" style="background-color:#b0cce9">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"><p>ARAGON </p>
	</div>  
	<div class="plat" style="background-color:#134263;">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg">
	<p style="color:white;">COMUNIDAD<br> VALENCIANA</p>
	</div>  
	<div class="plat" style="background-color:#b0cce9">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p>ANDALUCIA <br> ORIENTAL</p>
	</div>  
	<div class="plat" style="background-color:#134263;">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg">
	<p style="color:white;">ANDALUCIA <br> OCCIDENTAL</p>
	</div>  
	<div class="plat" style="background-color:#b0cce9">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg"><p style="color:white;">ALBACETE<br>
		MURCIA </p>
	</div>  
	
  
</div>
		
            
            
	



<div class="clearfix"></div>
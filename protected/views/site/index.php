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
                <p>Selección de las mejores rocas ornamentales </p>
           
            </div>
    
        </div>    	
    
        <div id="slide2" class="slide">
    
            <img width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 2 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Diseñador virtual</h3>
                <p>Nuestro simulador le ayudara a tomar decisiones</p>
             </div>
    
        </div>   
    
        <div id="slide3" class="slide">
    
            <img  width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent"><h3>Presupuesto online</h3>
            <p>Valora rapidamente tus proyectos.</p></div>
    
        </div>
        
        <div id="slide4" class="slide">
    
            <img width="940" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 3 jFlow Plus" />
    
            <div class="slideContent">
                <h3>Envios de materiales</h3>
                <p>Rápido transporte a todo el territorio nacional</p>
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

<div class="span2 parr2" style="margin-left:70px;"><p align="justify"><b>¿No ha encontrado lo que necesita?... </b>
 proSton.es puede suministrar todas sus <a href="#"><font color="#fe7902">ideas y proyectos</font></a>.
<br><br>
Utilice nuestra profesionalidad y logistica, le garantizamos la mejor relación  <b>calidad-precio</b> y una <b>eficiente</b> entrega en su domicilio.
</p>
	<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/lineadoble.png">

</div>
</div>


<div class="clearfix">&nbsp</div>

<div class="clearfix">&nbsp</div>



<div class=" span12 " style="padding:10px;width:98%; border: 4px solid #134263;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;">  
<div class="titulo " style="width:10%"><p style="margin-left:10px">Servicios</p></div>

	<div class="span6" style="margin-left:0px;" >
		<div class="clearfix"></div>

		<div class="divHome span12">
		
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/suministro.png"></div>
			<div class="span4"><h3><font style="color:#134263; ">Elaboración</font><br><font style="color:#969696">y suministro</font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Trabajamos con todas las rocas ornamentales: mármoles, granitos, calizas, areniscas, travertinos, pizarras, cuarcitas, etc...
			<br>
			<span class="dot">•</span>Las elaboramos en despieces estandar  y a las medidas que nos solicite.</p></div>
		</div>

		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png"></div>
			<div class="span4"><h3><font style="color:#134263">Diseñador virtual</font><br><font style="color:#969696">Presupuesto online</font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Conviertase en su propio decorador... utilice nuestros "<a href="#">escenarios</a>" para comparar los materiales seleccionando la combinación que mas le guste.<br>
			<span class="dot">•</span>  Obtenga el <a href="#">presupuesto online</a> de todas ellas.</p></div>
		</div>
		
		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.png"></div>
			<div class="span4"><h3><font style="color:#134263">Transporte  </font><br><font style="color:#969696"> a 
			 domicilio</font></h3></div>
			<div class="span6 parr"> <p><span class="dot">•</span>proSton.es tiene el objetivo de ofrecer rapidez en el suministro.<br>
<span class="dot">•</span>Con su compra, facilitamos el numero de seguimiento de su pedido; manteniendo su material bajo control.</p></div>
		</div>

		
		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/colocacion.png"></div>
			<div class="span4"><h3><font style="color:#134263">Colocación</font><br><font style="color:#969696">de materiales </font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Si no dispone de un profesional que le instale nuestros materiales, facilitamos colocadores con experiencia.<br><span class="dot">•</span>La plataforma proSton posee equipos de colocación cerca de su domicilio.</p></div>
		</div>

	
				
	</div>

	<div class=" span6" style="margin-left:10px;">
		<div class="clearfix"></div>

			<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/stock.jpg"></div>
			<div class="span4"><h3><font style="color:#134263">Proveedores</font><br><font style="color:#969696">Stock y Ofertas</font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Ponemos a su disposición el stock de diferentes fábricas, ofertaremos algunas partidas a los precios mas baratos del mercado.<br>
<span class="dot">•</span>Informaremos a nuestros visitantes sobre las empresas del sector.</p></div>
		</div>

		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.png"></div>
			<div class="span4"><h3><font style="color:#134263">Catalago</font> <br><font style="color:#969696">de materiales</font></h3></div>
			<div class="span6 parr" > <p><span class="dot">•</span>Nuestro catalogo incluye las fotografias y las caracteristicas fisico-mecánicas de todos los materiales que vendemos.<br>
<span class="dot">•</span>Solo incluimos en el catalogo las rocas que tengan la mejor relación calidad-precio.</p></div>
		</div>
		
		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/asesoramiento.png"></div>
			<div class="span4"><h3><font style="color:#134263">Asesoramiento</font><br><font style="color:#969696"> Ayuda técnica</font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Solicitenos sin ningún compromiso información sobre los materiales y sus acabados; podrá elegir lo mas adecuado para su obra.<br><span class="dot">•</span>Poseemos un cualificado departamento técnico, capacitado para realizar sus proyectos.
</p></div>
		</div>

		
		<div class="divHome span12">
			<div class="span2"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.png"></div>
			<div class="span4"><h3><font style="color:#134263">Atención</font><br><font style="color:#969696">personalizada</font></h3></div>
			<div class="span6 parr"><p><span class="dot">•</span>Disponemos de talleres en todas las regiones de España.<br>
<span class="dot">•</span>Será atendido por profesionales que podrán enseñarle los materiales a suministrar, medir su obra, colocar lo que nos compre, etc</p></div>
		</div>

		
		
		
		
		

	</div>

</div>

<div class="clearfix">&nbsp</div>
<div class="clearfix">&nbsp</div>




<div class=" span12 " style="padding:10px;width:98%; border: 4px solid #134263;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;">  
<div class="titulo " style="width:20%;">Plataforma proSton</div>
<div class="clearfix">&nbsp</div>
	<div class="plat"  >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/orense.jpg">
		<p style="color:white;">Galicia</p>
	</div>  
	<div class=" plat">  
		<img   alt=""  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/leon.jpg">
	<p>Asturias <br>Castilla Leon</p>
	</div>  
	<div class=" plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p style="color:white;">Cantabria<br>Pais Vasco</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/logroño.jpg">
	<p>La Rioja<br>Navarra</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg"> <p style="color:white;">Cataluña</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/mataro.jpg">
	<p >Extremadura</p>
	</div>  
	<div class=" plat" >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p style="color:white; align="justify";">Madrid<br>Castilla la Mancha</p>
	</div>  
	<div class="plat" >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/madrid.jpg"><p>Aragón</p>
	</div>  
	<div class="plat" >  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg">
	<p style="color:white;">Comunidad Valenciana</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/sevilla.jpg"><p>
	Andalucia oriental</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/almeria.jpg">
	<p style="color:white;">Andalucía occidental</p>
	</div>  
	<div class="plat">  
		<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/murcia.jpg"><p style="color:white;"> Albacete<br>Murcia</p>
	</div>  
	
  <div class="clearfix">&nbsp</div>          
	
</div>
		
            
  



<div class="clearfix"></div>
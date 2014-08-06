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
<div class="span11 offset1" style="margin-bottom:20px" >
     <div class="span11" style="margin-left:1%;">
<strong><p  style="font-size:20px;">El portal de internet para adquirir mármoles, granitos y otras rocas ornamentales a precio de fábrica.</p></strong> 
</div>

</div>


<div class="span12">

	<div class="span10">

		<div class="span12">
			<div class="span9 "><!-- BOTONES PRINCIPAL-->
			<div class="span3 enl" >  
		
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=reformas"><img  alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg';"/></a>

			</div>  

			<div class="span3 enl" style="margin-left:1.4%;">  
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=pisos_unifamiliares"><img  alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg';"/></a>

			
			</div>  

			<div class="span3 enl" style=" margin-left:1.4%;">  
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=interiorismo_cocinas"><img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg';"/></a>

			
			</div>  

			<div class="span3 enl" style=" margin-left:1.4%;">  
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=edificacion_urbanizacion">
			<img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg';"/></a>
			
			</div> 
			</div><!--FIN BOTONES PRINCIPAL-->

			<div class="span3"><!--BOTON ?-->
			<div class="span9 enl" style=" margin-left:6%;">  
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=paisajismo_mamposteria">
			<img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>
			</a>				
			</div>
			</div><!--FIN BOTON ?-->
		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12">

			<div class="span8"><!--SLIDER-->

				<div id="sliderContainer">

					<div id="mySlides">

						<div id="slide1" class="slide">    
					
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 1 jFlow Plus" />
					
							<div class="slideContent">
								<h3>Catalogo de materiales</h3>
								<p>Selección de las mejores rocas ornamentales </p>
						
							</div>
					
						</div>    	
				
						<div id="slide2" class="slide">
							<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id">
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 2 jFlow Plus" />
							</a>
							<div class="slideContent">
								<h3>Diseñador virtual <font style="float:right; margin-right:70px;"> Comparador</font></h3>
							<p>Nuestro simulador le ayudara a tomar decisiones</p>
							</div>
					
						</div>   
				
						<div id="slide3" class="slide">
					
							<img   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Slide 3 jFlow Plus" />
					
							<div class="slideContent"><h3>Presupuesto online</h3>
								<p>Valora rapidamente tus proyectos.</p>
							</div>
						
						</div>
					
						<div id="slide4" class="slide">
						
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/4.jpg" alt="Slide 3 jFlow Plus" />
						
							<div class="slideContent">
								<h3>Transporte a domicilio</h3>
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
			</div><!--FIN SLIDER-->

			<div class="span1"></div>

			<div class="span3" style="margin-left:2%"> <!--TEXTO ?-->
				<div class="span9 enl" style=" margin-left:1.4%;">  
					<p align="justify"><b>¿No ha encontrado lo que necesita?... </b>Consultenos, proSton.es puede suministrar todas sus <strong>ideas</strong> o <strong> proyectos</strong>.
					<br><br>
					Utilice nuestra profesionalidad y logistica. Garantizamos la mejor relación  <b>calidad-precio</b>, con una eficiente entrega.
					<br><br>
					</p>				
				</div>
			</div><!--FIN TEXTO ?-->

		</div>
	</div>


	<div class="span2" style="margin-left:0px;"><!--OFERTAS-->
		<div class="span12">
			OFERTAS
		</div>

		<div class="span12">
			<div class="span5">
				<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/negro_marquina.jpg">
			</div>

			<div class="span6">

			Negro Macael <br>
			5000 m<sup>2</sup><br>
			<font size="4">19,9 €/m<sup>2</sup></font>
				
			</div>



		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12">
			<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/blanco_macael.jpg">
		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12">
			<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/granito/G664.jpg">
		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12">
			<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/granito/tezal.jpg">
		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12">
			<a href="">Ver mas ofertas</a>
		</div>
	
	</div><!--FIN OFERTAS-->


</div>







<div class="clearfix">&nbsp</div>



<div class=" span12 " style="padding:10px;width:98%; border: 1px solid #134263;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;">  <!--SERVICIOS-->

	<div class="titulo " style="width:10%">
		<p style="margin-left:10px">Servicios</p>
	</div>

<div class="span12" style="margin-left:0px;"> 

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png">
				</div>
				<div class="span9 cuatit" align="right">
					<div>
						<h3><font style="color:#134263">Diseñador</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">virtual</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p>Conviertase en su propio decorador, utilice nuestros escenarios.</p>
				</div>
			</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png">
				</div>
				<div class="span9" align="right">
					<div>
						<h3><font style="color:#134263">Presupuesto</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">online</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><span class="dot">•</span>Conocerá inmediatamente el coste de sus consultas.</p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.png">
				</div>
				<div class="span9" align="right">
					<div>
						<h3><font style="color:#134263">Catálogo</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">de materiales</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><span class="dot">•</span>Solo vendemos las rocas con la mejor relación calidad-precio.</p></div>
				</div>

		</a>	
	</div>
</div>
<div class="span12" style="margin-left:0px;">

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.png">
				</div>
				<div class="span9" align="right">
					<h3><font style="color:#134263">Transporte</font><br><font style="color:#969696">a domicilio</font></h3>
				</div>
				<div class="span12 parr">
					<p><span class="dot">•</span>Facilitamos el seguimiento y el control de su material.</p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png">
				</div>
				<div class="span9" align="right">
					<h3><font style="color:#134263">Tarifas</font></h3>
				</div>
				<div class="span12 parr">
					<p><span class="dot">•</span> Conozca y compare el precio de todas las elaboraciones.</p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.png">
				</div>
				<div class="span9" align="right">
					<h3><font style="color:#134263">Atención</font><br><font style="color:#969696">personalizada</font></h3>
				</div>
				<div class="span12 parr">
					<p><span class="dot">•</span> Disponemos de talleres a su servicio muy cerca de usted.</p></div>
				</div>

		</a>	
	</div>



</div>





	</div><!--FIN SERVICIOS-->

	
								

								<div class="clearfix">&nbsp</div>
								<div class="clearfix">&nbsp</div>




								<div class=" span12 " style="padding:10px;width:98%; border: 1px solid #134263;
								-webkit-border-radius: 4px;
								-moz-border-radius: 4px;
								border-radius: 4px;">  
								<div class="titulo " style="width:20%;"><p>Plataforma proSton</p></div>
								<div class="clearfix">&nbsp</div>
								<div class="plat"  >  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/orense.jpg">
									<p style="color:white;">Galicia</p>
								</div>  
								<div class=" plat">  
									<img   alt=""  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/leon.jpg">
									<p>Asturias <br>Castilla Leon</p>
								</div>  
								<div class=" plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/guipozcoa.jpg">
									<p style="color:white;">Cantabria<br>Pais Vasco</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/logroño.jpg">
									<p>La Rioja<br>Navarra</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/mataro.jpg"> <p style="color:white;">Cataluña</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/extremadura.jpg">
									<p >Extremadura</p>
								</div>  
								<div class=" plat" >  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/aragon.jpg"><p>Aragón</p>



								</div>  
								<div class="plat" >  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/madrid.jpg"><p style="color:white; align="justify";">Madrid<br>Castilla-La Mancha</p>
								</div>  
								<div class="plat" >  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/alicante.jpg">
									<p style="color:white;">Comunidad Valenciana</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/sevilla.jpg"><p>
									Andalucia occidental</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/almeria.jpg">
									<p style="color:white;">Andalucía oriental</p>
								</div>  
								<div class="plat">  
									<img   alt="" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/murcia.jpg"><p style="color:white;"> Albacete<br>Murcia</p>
								</div>  

								<div class="clearfix">&nbsp</div>          

							</div>






							<div class="clearfix"></div>
<?php
	/* @var $this SiteController */
	$this->pageTitle=Yii::app()->name;
?>


<div class="clearfix">&nbsp</div>
<div class="span11 offset1" style="margin-bottom:20px" >
     <div class="span11" style="margin-left:1%;">
<strong><p  style="font-size:20px;">El portal de internet para adquirir mármoles, granitos y otras rocas ornamentales a precios de fábrica.</p></strong> 
</div>

</div>


<div class="span12">

	<div class="span10">

		<div class="span12">

			<div class="span9 "><!-- BOTONES PRINCIPAL-->

			<div class="span3 enl" >
				 <figure> 		
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=reformas">
						<img  alt="Reformas y rehabilitación - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg';"/>
						<!--<figcaption style="font-size:24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"> Reformas y rehabitilación.</figcaption>-->
					</a>
				</figure>
			</div>  

			<div class="span3 enl" style="margin-left:2%;">  
				<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=pisos_unifamiliares">
					<img  alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg';"/></a>

			
			</div>  

			<div class="span3 enl" style=" margin-left:2%;">  
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=interiorismo_cocinas"><img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg';"/></a>

			
			</div>  

			<div class="span3 enl" style=" margin-left:2%;">  
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

							<div class="slideContent"  >
							
							<h3 >Diseñador virtual</h3>
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
					<strong>¿No ha encontrado lo que necesita?.</strong><p align="justify"><em>Consultenos, proSton puede suministrar todas sus</em> <strong>ideas</strong> o <strong> proyectos</strong>.</p>
				

					<strong>¿Necesita colocar un material?</strong> <p align="justify"><em>Disponemos de profesionales en toda España que le pasaran presupuestos de colocación.</em></p>
						<br><br>
					</p>				
				</div>
			</div><!--FIN TEXTO ?-->

		</div>
	</div>


	<div class="span2 ofertas" style="margin-left:5px;border:1px #134263 solid;padding:5px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);"><!--OFERTAS-->
		<div class="span6 offset3" align="center" style="margin-top:-25px; background-color:white;">
			<h4><font style="color:#134263">Ofertas</font></h4>
		</div>



		<div class="span12" style="border: 1px solid black;margin-left:0px;">
			
			<div class="span8 offset2" style="margin-bottom:-10px">
			<strong>Negro Marquina</strong>
			</div>

			<div class="span12">
				<div class="span4" style="padding:5px;">
					<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/negro_marquina.jpg">
				</div>

				<div class="span8">
				
				<font size="1"> 60x40x2 Pulido</font><br>
				<font size="1">a partir de 500 m<sup>2</sup></font><br>
				<font size="4" style="color:#134263" >19,9 </font>€/m<sup>2</sup>
					
				</div>

			</div>


			



		</div>

		<div class="clearfix">&nbsp</div>

		<div class="span12" style="border: 1px solid black;margin-left:0px;">
			
			<div class="span8 offset2" style="margin-bottom:-10px">
			<strong>Blanco Macael</strong>
			</div>

			<div class="span12">
				<div class="span4" style="padding:5px;">
					<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/blanco_macael.jpg">
				</div>

				<div class="span8">
				
				<font size="1"> 60x40x2 Pulido</font><br>
				<font size="1">a partir de 500 m<sup>2</sup></font><br>
				<font size="4" style="color:#134263" >17 </font>€/m<sup>2</sup>
					
				</div>

			</div>


			



		</div>



		<div class="clearfix">&nbsp</div>

		
		<div class="span12" style="border: 1px solid black;margin-left:0px;">
			
			<div class="span8 offset2" style="margin-bottom:-10px">
			<strong>Rojo Coralito</strong>
			</div>

			<div class="span12">
				<div class="span4" style="padding:5px;">
					<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/rojo_coralito.jpg">
				</div>

				<div class="span8">
				
				<font size="1"> 60x40x2 Pulido</font><br>
				<font size="1">a partir de 500 m<sup>2</sup></font><br>
				<font size="4" style="color:#134263" >18 </font>€/m<sup>2</sup>
					
				</div>

			</div>
		</div>


		
		<div class="clearfix">&nbsp</div>




		<div class="span12" align="center">
			<a href="" style="background-color:#134263;padding:3px;border:1px solid black;"><font size="2" color="white">Ver mas ofertas</font></a>
		</div>
	
	</div><!--FIN OFERTAS-->


</div>











<div class=" span12 " style="padding:10px;width:98%; border: 1px solid #134263;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;">  <!--SERVICIOS-->

	<div class="titulo " style="width:10%">
		<p style="margin-left:10px">Servicios</p>
	</div>

<div class="span12" style="margin-left:0px;"> 

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/diseñador.png">
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
					<p><em>Conviertase en su decorador, utilice nuestros escenarios.</em></p>
				</div>
			</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/presupuesto">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png">
				</div>
				<div class="span9 cuatit" align="right">
					<div>
						<h3><font style="color:#134263">Presupuesto</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">online</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><em>Conocerá inmediatamente el coste de sus consultas.</em></p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/tipo/verCaracteristicas/id/12">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.png">
				</div>
				<div class="span9 cuatit" align="right">
					<div>
						<h3><font style="color:#134263">Catálogo</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">de materiales</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><em>Vendemos materiales con la mejor relación calidad-precio.</em></p></div>
				</div>

		</a>	
	</div>
</div>
<div class="span12" style="margin-left:0px;">

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=transporteadomicilio">		
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.png">
				</div>
				<div class="span9 cuatit" align="right">
					<div>
						<h3><font style="color:#134263">Transporte</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">a domicilio</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><em>Facilitamos el seguimiento y el control de su material.</em></p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/preciounitario/index">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/tarifas.png">
				</div>
				<div class="span9 cuatit" align="right">
	<div>
						<h3><font style="color:#134263">Tarifas</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696"><br></font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><em>Conozca y compare el precio de todas las elaboraciones.</em></p></div>
				</div>

		</a>	
	</div>

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=atencionpersonalizada">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<img style="height:60px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.png">
				</div>
				<div class="span9 cuatit" align="right">
						<div>
						<h3><font style="color:#134263">Atención</font></h3>
					</div>
					<div>
						<h3><font style="color:#969696">personalizada</font></h3>
					</div>
				</div>
				<div class="span12 parr">
					<p><em>Disponemos de talleres a su servicio muy cerca de usted.</em></p></div>
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
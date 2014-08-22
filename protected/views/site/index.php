<?php
	/* @var $this SiteController */
	$this->pageTitle=Yii::app()->name;
?>


<div class="clearfix">&nbsp</div>
<div class="span12 tituloweb" align="center" >
     
<p><h1><strong>El portal de internet para adquirir mármoles, granitos y otras rocas ornamentales a precios de fábrica.</strong></h1></p>

</div>


<div class="span12">

	<div class="span10">

		<div class="span12">

			<div class="span9 "><!-- BOTONES PRINCIPAL-->

				<div class="span3 enl" >
				 		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=reformas">
						<figure> 	
						<img  alt="Reformas y rehabilitación - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg';"/>
						<!--<figcaption style="font-size:24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"> Reformas y rehabitilación.</figcaption>-->
						</figure>
					</a>
				
				</div>  

				<div class="span3 enl" style="margin-left:2%;"> 
					
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=pisos_unifamiliares">
					<figure> 	
					<img  alt="Edificación / Unifamiliares - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg';"/>
					</figure>
					</a>

				</div>  

				<div class="span3 enl" style=" margin-left:2%;">  
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=interiorismo_cocinas">
					<figure>
					<img alt="Interiorismo / Cocinas y baños - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg';"/>
					</figure>
					</a>
				</div>  

				<div class="span3 enl" style=" margin-left:2%;">  
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=edificacion_urbanizacion">
					<figure>	
					<img alt="Mamposteria / Urbanización - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg';"/>
					</figure>
					</a>
			
				</div> 
			</div><!--FIN BOTONES PRINCIPAL-->

			<div class="span3"><!--BOTON ?-->
				<div class="span9 enl" style=" margin-left:6%;"> 
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=paisajismo_mamposteria">
					<figure> 	
					<img alt="Dinos tu idea - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>
					</figure>
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
					
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Catálogo de materiales - proSton.es" />
					
							<div class="slideContent">
								<h3>Catalogo de materiales</h3>
								<p>Selección de las mejores rocas ornamentales </p>
						
							</div>
					
						</div>    

						<div id="slide2" class="slide">
							<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id">
							<figure>
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Diseñador virtual - proSton.es" />
						    </figure>
							</a>

							<div class="slideContent"  >
							
							<h3 >Diseñador virtual</h3>
							<p>Nuestro simulador le ayudara a tomar decisiones</p>
							</div>
											
						</div>   

						<div id="slide3" class="slide">
							<figure>
							<img   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Presupuesto online - proSton.es" />
						    </figure>
							<div class="slideContent"><h3>Presupuesto online</h3>
								<p>Valora rapidamente tus proyectos.</p>
							</div>
						
						</div>

						
				
								
						
					
						<div id="slide4" class="slide">
							<figure>
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/4.jpg" alt="Transporte a domicilo - proSton.es" />
							</figure>
						
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


	<div class="span2 ofertas" ><!--OFERTAS-->
		<div class="span6 offset3 titofertas" align="center">
			<h2>Ofertas</h2>
		</div>



		<div class="span12 cuerofertas">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Emperador Claro</strong>
					</div>

					<div class="span12">
					<div class="span4" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Emperador Claro - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/mini/marmol/emperador_claro.jpg">
				    </figure>
				</div>

				<div class="span8">
				<p align="center">
				<font size="2"> 40x30x2 -En Bruto-</font><br>
				<font size="4" class="arriba" >16,50 </font>€/m<sup>2</sup><br>
				<font size="1">a partir de 100 m<sup>2</sup></font></p>
				
					
				</div>

			</div>
		</div>

				
		<div class="clearfix">&nbsp</div>

<div class="clearfix">&nbsp</div>




		<div class="span12" align="center">
			<a href="" style="background-color:#134263;padding:3px;border:1px solid black;"><font size="2" color="white">Ver mas ofertas</font></a>
		</div>
	
	</div><!--FIN OFERTAS-->


</div>











<div class=" span12  servicios" >  <!--SERVICIOS-->

	<div class="titulo " style="width:10%">
		<p style="margin-left:10px">Servicios</p>
	</div>

<div class="span12" style="margin-left:0px;"> 

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<figure>
					<img alt="Servicio Diseñador virtual - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/diseñador.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Diseñador</font></h3>
					</div>
					<div class="abajo">
						<h3><font>virtual</font></h3>
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
					<figure>
					<img alt="Servicio Presupuesto online - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Presupuesto</font></h3>
					</div>
					<div class="abajo">
						<h3><font>online</font></h3>
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
					<figure>
					<img alt="Servicio Catálogo de materiales - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Catálogo</font></h3>
					</div>
					<div class="abajo">
						<h3><font>de materiales</font></h3>
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
					<figure>
					<img alt="Servicio Transporte a domicilio - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Transporte</font></h3>
					</div>
					<div class="abajo">
						<h3><font>a domicilio</font></h3>
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
					<figure>
					<img alt="Servicio Tarifas - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/tarifas.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Tarifas</font></h3>
					</div>
					<div>
						<h3><font><br></font></h3>
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
					<figure>
					<img alt="Servicio Atención personalizada - proSton.es" style="height:60px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Atención</font></h3>
					</div>
					<div class="abajo">
						<h3><font>personalizada</font></h3>
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
									<figure>
									<img   alt="Taller Galicia - proSton.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/orense.jpg">
									<figcaption>Galicia</figcaption>
									</figure>
								</div>  
								<div class="plat" > 
									<figure> 
									<img   alt="Taller Asturias - Castilla León "  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/leon.jpg">
									<figcaption>Asturias<br>Castilla León</figcaption>
									</figure>
								</div>  
								<div class="plat" >
									<figure>  
									<img   alt="Taller Cantabria - Pais Vasco - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/guipozcoa.jpg">
									<figcaption>Cantabria<br>Pais Vasco</figcaption>
									</figure>
								</div>  
								<div class="plat"> 
									<figure> 
									<img   alt="Taller La Rioja - Navarra - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/logroño.jpg">
									<figcaption>La Rioja<br>Navarra</figcaption>
								</figure>
								</div>  
								<div class="plat">
									<figure>  
									<img   alt="Taller Cataluña - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/mataro.jpg">
									 <figcaption>Cataluña</figcaption>
									</figure>
								</div>  
								<div class="plat"> 
									<figure> 
									<img   alt="Taller Extremadura - proSton.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/extremadura.jpg">
									<figcaption>Extremadura</figcaption>
									</figure>
								</div>  
								<div class=" plat" >
									<figure>  
									<img   alt="Taller Aragón -proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/aragon.jpg">
									<figcaption>Aragón</figcaption>
									</figure>
								</div>  
								<div class="plat" >  
									<figure>
									<img   alt="Taller Madrid - Castilla La Mancha - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/madrid.jpg">
									<figcaption>Madrid<br>Castilla-La Mancha</figcaption>
									</figure>
								</div>  
								<div class="plat" >  
									<figure>
									<img   alt="Taller Comunidad Valenciana - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/alicante.jpg">
									<figcaption>Comunidad Valenciana</figcaption>
									</figure>
								</div>  
								<div class="plat">
									<figure>  
									<img   alt="Taller Andalucía occidental - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/sevilla.jpg">
									<figcaption>Andalucía occidental</figcaption>
									</figure>
								</div>  
								<div class="plat">
									<figure>  
									<img   alt="Taller Andalucía oriental - proSton.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/almeria.jpg">
									<figcaption>Andalucía oriental</figcaption>
									</figure>
								</div>  
								<div class="plat">  
									<figure>
									<img   alt="Taller Albacete - Murcia - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/murcia.jpg">
									<figcaption>Albacete<br>Murcia</figcaption>
									</figure>
								</div>


								<div class="clearfix">&nbsp</div>          

							
						</div>





							<div class="clearfix"></div>
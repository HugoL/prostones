<?php
	/* @var $this SiteController */
	$this->pageTitle='proSton.es - Mármoles y Granitos - Venta de Mármol y Granito de calidad.';
	Yii::app()->clientScript->registerMetaTag("Venta de materiales ornamentales Mármol, Granito, Caliza, Travertinos, etc", 'description');
	Yii::app()->clientScript->registerMetaTag(" Marmol , Granito ,Presupuesto, Reformas,Diseñador, Barato, Precio, Obra, Reforma, Oferta, Baldosa, Rodapie, Pulido, Flameado, Abujardado, Mármol proston, Granito proston,  Marmolistas", 'keywords');
	
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
					
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=edificacion_unifamiliares">
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
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=mamposteria_urbanizacion">
					<figure>	
					<img alt="Mamposteria / Urbanización - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg';"/>
					</figure>
					</a>
			
				</div> 
			</div><!--FIN BOTONES PRINCIPAL-->

			<div class="span3"><!--BOTON ?-->
				<div class="span9 enl" style=" margin-left:6%; display:block"> 
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/contact">
						
					<img alt="Dinos tu idea - proSton.es" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>
					
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
					
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>1.jpg" alt="Catálogo de materiales - proSton.es" />
					
							<div class="slideContent">
								<h2>Catálogo de materiales</h2>
								<p>Selección de las mejores rocas ornamentales </p>
						
							</div>
					
						</div>    

						<div id="slide2" class="slide">
							<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id/12">
							<figure>
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>2.jpg" alt="Diseñador virtual - proSton.es" />
						    </figure>
							</a>

							<div class="slideContent"  >
							
							<h2 >Diseñador virtual</h2>
							<p>Nuestro simulador le ayudara a tomar decisiones</p>
							</div>
											
						</div>   

						<div id="slide3" class="slide">
							<figure>
							<img   src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>3.jpg" alt="Presupuesto online - proSton.es" />
						    </figure>
							<div class="slideContent"><h2>Presupuesto online</h2>
								<p>Valora rapidamente tus proyectos.</p>
							</div>
						
						</div>

						
				
								
						
					
						<div id="slide4" class="slide">
							<figure>
							<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>4.jpg" alt="Transporte a domicilo - proSton.es" />
							</figure>
						
							<div class="slideContent">
								<h2>Transporte a domicilio</h2>
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

			<div class="span3 prenl"> <!--TEXTO ?-->
				<div class="span9 enl2" >  
					<strong>¿No ha encontrado lo que necesita?.</strong><p align="justify"><em>Consultenos, proSton.es puede suministrar todas sus</em> <strong>ideas</strong> o <strong> proyectos</strong>.</p>
				

					<strong>¿Necesita que le coloquen un material?</strong> <p align="justify"><em>Disponemos de profesionales en toda España que le pasaran presupuestos de colocación.</em></p>
						
					</p>				
				</div>
			</div><!--FIN TEXTO ?-->

		</div>
	</div>


	<div class="span2 ofertas" style="display:block;"><!--OFERTAS-->
		<div class="span6 offset3 titofertas" align="center">
			<h2>Ofertas</h2>
		</div>

		
		<div class="span12 cuerofertas oferta" id="oferta1">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Emperador Claro</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Emperador Claro - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/emperador_claro.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2">40x30x2</font><br>
				

				<font size="4" class="arriba" >9,00 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
					
				</div>

			</div>
		</div>

				
		

		<div class="span12 cuerofertas oferta" id="oferta2">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Emperador Claro</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Emperador Claro - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/emperador_claro.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2">60x30x2</font><br>
				
				<font size="4" class="arriba" >16 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
					
				</div>

			</div>
		</div>

				
		
		<div class="span12 cuerofertas oferta" id="oferta3" >
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Emperador Claro</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Emperador Claro - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/emperador_claro.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2">60x40x2</font><br>
				<font size="4" class="arriba" >16,65 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
					
				</div>

			</div>
		</div>

		
		<div class="span12 cuerofertas oferta " id="oferta4" >
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Beige Levante</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Beige Levante - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/beige_levante.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x30x2</font><br>
				<font size="4" class="arriba" >12,10 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
				
					
				</div>

			</div>
		</div>

		
		<div class="span12 cuerofertas oferta" id="oferta5" >
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Crema Levante</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Marmol Crema Levante - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/crema_levante.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2">40x30x2</font><br>
				<font size="4" class="arriba" >12,10 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
				
					
				</div>

			</div>
		</div>

		
		<div class="span12 cuerofertas oferta" id="oferta6" >
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Rosa Zarci</strong>
			</div>

			<div class="span12">
				<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Mármol rosa Zarci - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/rosa_zarci.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2">60x30x2</font><br>
				<font size="4" class="arriba" >13,30 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
				
					
				</div>

			</div>


		</div>

		<div class="span12 cuerofertas oferta" id="oferta7">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Blanco Macael</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Mármol Blanco Macael- proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/blanco_macael.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 40x20x2</font><br>
				<font size="4" class="arriba" >11 </font>€/m<sup>2</sup><br>
				<font size="1">(en bruto)</font></p>
				
				
					
				</div>

			</div>
		</div>	
		<div class="span12 cuerofertas oferta" id="oferta8">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Blanco Macael</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Mármol Blanco Macael- proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/blanco_macael.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 40x30x2</font><br>
				<font size="4" class="arriba" >17 </font>€/m<sup>2</sup><br>
				<font size="1">(En bruto)</font></p>
				
				
					
				</div>

			</div>
		</div>	

		<div class="span12 cuerofertas oferta" id="oferta9">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Rojo Coralito</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Mármol Rojo Coralito - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/rojo_coralito.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 40x30x2</font><br>
				<font size="4" class="arriba" >11 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>	

		<div class="span12 cuerofertas oferta" id="oferta10">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Marrón Emperador</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Mármol Marrón emperador  - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/marmol/marron_emperador.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 40x30x2</font><br>
				<font size="4" class="arriba" >18 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>	

		<!--segundo boton de ofertas-->	


		<div class="span12 cuerofertas oferta2" id="oferta21">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>G687</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito G687 - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/G687.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x1,5</font><br>
				<font size="4" class="arriba" >13,75 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>

		<div class="span12 cuerofertas oferta2" id="oferta22">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>G687</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito G687 - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/G687.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x2</font><br>
				<font size="4" class="arriba" >15,40 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>

		<div class="span12 cuerofertas oferta2" id="oferta23">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>G687</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito G687 - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/G687.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x3</font><br>
				<font size="4" class="arriba"> 21,00 </font>€/m<sup>2</sup><br>
				<font size="1">(Flameado)</font></p>
				
				
					
				</div>

			</div>
		</div>
				
		<div class="span12 cuerofertas oferta2" id="oferta24">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>G664</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito G664 - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/G664.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x2</font><br>
				<font size="4" class="arriba" >16,20 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>
						
		<div class="span12 cuerofertas oferta2" id="oferta25">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>G664</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito G664 - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/G664.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x2</font><br>
				<font size="4" class="arriba" >17,00 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>
				
		<div class="span12 cuerofertas oferta2" id="oferta26">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Gris Parga</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Gris Parga - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/gris_parga.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x1,5</font><br>
				<font size="4" class="arriba" >18,90 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>
		<div class="span12 cuerofertas oferta2" id="oferta27">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Gris Parga</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Gris Parga - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/gris_parga.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x2</font><br>
				<font size="4" class="arriba" >19,80 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>

		<div class="span12 cuerofertas oferta2" id="oferta28">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Rosa Porriño</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito Gris Parga- proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/rosa_porrino.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x1,5</font><br>
				<font size="4" class="arriba" >20,00 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>

		<div class="span12 cuerofertas oferta2" id="oferta29">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Mondariz</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito Mondariz- proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/mondariz.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x1,5</font><br>
				<font size="4" class="arriba" >22,00 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>

		<div class="span12 cuerofertas oferta2" id="oferta210">
			
			<div class="span12" style="margin-bottom:-10px" align="center">
			<strong>Gran Perla</strong>
					</div>

					<div class="span12">
					<div class="span5" style="padding:5px;">
					<figure>	
					<img alt="Oferta Granito Gran Perla - proSton.es " src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>textura/ancha/granito/gran_perla.jpg">
				    </figure>
				</div>

				<div class="span7">
				<p align="center">
				<font size="2"> 60x40x1,5</font><br>
				<font size="4" class="arriba" >22,15 </font>€/m<sup>2</sup><br>
				<font size="1">(Pulido)</font></p>
				
				
					
				</div>

			</div>
		</div>
		<div class="span12" ><font size="1">* Ofertas a partir de 100 m<sup>2</sup></font></div>

		<div class="span12" align="center">
			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=ofertas" style="background-color:#134263;padding:3px;border:1px solid black;"><font size="2" color="white">Ver mas ofertas</font></a>
		</div>
	
	</div><!--FIN OFERTAS-->


</div>











<div class=" span12  servicios" >  <!--SERVICIOS-->

	<div class="titulo " style="width:10%">
		<p style="margin-left:10px">Servicios</p>
	</div>

<div class="span12" style="margin-left:0px;"> 

	<div class="span4">
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id/12">	
			<div class="divHome span12">
				<div class="span3 iconoser">
					<figure>
					<img alt="Servicio Diseñador virtual - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/disenador.png">
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
					<img alt="Servicio Presupuesto online - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/presupuesto.png">
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
					<img alt="Servicio Catálogo de materiales - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/catalogo.png">
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
					<img alt="Servicio Transporte a domicilio - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/transporte.png">
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
					<img alt="Servicio Tarifas - proSton.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/tarifas.png">
					</figure>
				</div>
				<div class="span9 cuatit" align="right">
					<div class="arriba">
						<h3><font>Tarifas</font></h3>
					</div>
					<div>
						<br>
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
					<img alt="Servicio Atención personalizada - proSton.es" style="height:60px;" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>servicios/atencion.png">
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
									<img   alt="Taller Galicia - proSton.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>talleres/orense.jpg">
									<figcaption>Galicia</figcaption>
									</figure>
								</div>  
								<div class="plat" > 
									<figure> 
									<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>talleres/leon.jpg" width="116px" height="60px" alt="Taller Asturias - Castilla León "  >
									<figcaption>Asturias<br>Castilla León</figcaption>
									</figure>
								</div>  
								<div class="plat" >
									<figure>  
									<img  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>talleres/guipozcoa.jpg" width="116px" height="60px" alt="Taller Cantabria - Pais Vasco - proSton.es" >
									<figcaption>Cantabria<br>Pais Vasco</figcaption>
									</figure>
								</div>  
								<div class="plat"> 
									<figure> 
									<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/talleres/logrono.jpg" width="116px" height="60px"  alt="Taller La Rioja - Navarra - proSton.es" >
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

							<div id="caja_flotante">
  								<div id="cont_caja_flotante" >
  									<div align="center"> <img width="15px" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>flecha.png"</div>
  									<div style="border: 1px solid black; background-color:khaki;"><font size="1"><strong>Presupueste gratis sus materiales</strong></font></div>
	  								
  								</div>
							</div>

<script async type="text/javascript">
							
$(document).ready(function () {

    var activeDiv = 1;
   
    showDiv(activeDiv);
     // show first one because all are hidden by default
    var timer = setInterval(changeDiv, 4000);
    
    function changeDiv() {
        activeDiv++;
        if (activeDiv == 11) {
            activeDiv = 1;
        }
        showDiv(activeDiv);
    }

    function showDiv(num) {
       $('div.oferta').hide(); // hide all
        $('#oferta' + num).fadeIn(); // show active
    }


});

$(document).ready(function () {

    var activeDiv2 = 1;
   
    showDiv2(activeDiv2);
     // show first one because all are hidden by default
    var timer = setInterval(changeDiv2, 7000);
    
    function changeDiv2() {
        activeDiv2++;
        if (activeDiv2 == 11) {
            activeDiv2 = 1;
        }
        showDiv2(activeDiv2);
    }

    function showDiv2(num) {
       $('div.oferta2').hide(); // hide all
        $('#oferta2' + num).fadeIn(); // show active
    }


});




	$(document).ready(function(){



		//$("#oferta1").delay(10000).fadeOut("slow");
		//$("#oferta4").delay(10500).fadeIn("slow");
		//$("#oferta2").delay(21000).fadeOut("slow");
		//$("#oferta5").delay(22000).fadeIn("slow");
		//$("#oferta3").delay(31000).fadeOut("slow");
		//$("#oferta6").delay(32000).fadeIn("slow");
		 

		$("#myController").jFlow({

			controller: ".jFlowControl", // must be class, use . sign

			slideWrapper : "#jFlowSlider", // must be id, use # sign

			slides: "#mySlides",  // the div where all your sliding divs are nested in

			selectedWrapper: "jFlowSelected",  // just pure text, no sign
			
			effect: "flow", //this is the slide effect (rewind or flow)

			width: "100%",  // this is the width for the content-slider

			height: "200px",  // this is the height for the content-slider

			duration: 400,  // time in milliseconds to transition one slide
			
			pause: 5000, //time between transitions

			prev: ".jFlowPrev", // must be class, use . sign

			next: ".jFlowNext", // must be class, use . sign

			auto: true	

		});


	});

</script>

<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
  var posicion = $("#caja_flotante").offset();
  var margenSuperior = 67;
  $(window).scroll(function() {
    if ($(window).scrollTop() > posicion.top) {
      $("#caja_flotante").stop().animate({
        marginTop: $(window).scrollTop() - posicion.top + margenSuperior
      });
    } else {
      $("#caja_flotante").stop().animate({
        marginTop: 0
      });
    };
  });
});
//]]>
</script>
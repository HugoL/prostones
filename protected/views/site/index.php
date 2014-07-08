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
		
		<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=reformas"><img  alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/reharefo.jpg';"/></a>

	</div>  

	<div class="span2 enl" style="margin-left:1.4%;">  
		<a href="#"><img  alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/pisosyuni.jpg';"/></a>

		
	</div>  
	<div class="span2 enl" style=" margin-left:1.4%;">  
		<a href="#"><img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/cocinas.jpg';"/></a>

		
	</div>  
	<div class="span2 enl" style=" margin-left:1.4%;">  
		
		<img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/constru.jpg';"/>
		
	</div> 
	<div class="span2 enl" style=" margin-left:1.4%;">  
		<img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/paisa.jpg';"/>
		
		
	</div>
	<div class="span2 enl" style=" margin-left:4.2%;">
		<!--<img style="border:0" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/barratop.png"> 
		<img style="height:70px;margin-top:5px;" width="250" height="25" alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>
	-->
	<img alt="" class="thumbnail" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros2.jpg';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/otros.jpg';"/>
</div>
</div>




<!--
*********************************
Slider 
*********************************
-->
<div class="clearfix">&nbsp</div>


<div class="span12">
	<div class="span7" style="">
		<div id="sliderContainer">

			<div id="mySlides">

				<div id="slide1" class="slide">    
					
					<img width="740" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/1.jpg" alt="Slide 1 jFlow Plus" />
					
					<div class="slideContent">
						<h3>Catalogo de materiales</h3>
						<p>Selección de las mejores rocas ornamentales </p>
						
					</div>
					
				</div>    	
				
				<div id="slide2" class="slide">
					<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/simulador/index/id">
					<img width="740" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/2.jpg" alt="Slide 2 jFlow Plus" />
					</a>
					<div class="slideContent">
						<h3>Diseñador virtual <font style="float:right; margin-right:70px;"> Comparador</font></h3>
						<p>Nuestro simulador le ayudara a tomar decisiones</p>
					</div>
					
				</div>   
				
				<div id="slide3" class="slide">
					
					<img  width="740" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/3.jpg" alt="Slide 3 jFlow Plus" />
					
					<div class="slideContent"><h3>Presupuesto online</h3>
						<p>Valora rapidamente tus proyectos.</p></div>
						
					</div>
					
					<div id="slide4" class="slide">
						
						<img width="740" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/4.jpg" alt="Slide 3 jFlow Plus" />
						
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


<!--
*********************************
Fin slider 
*********************************
-->
</div>
<div class="span2 parr2" style=" margin-left:7%;"><img height="240px" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/promocion.jpg">
<!--<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/barrabot.png">-->

</div>



<div class="span2 parr2" style=" margin-left:4%;"><p align="justify"><b>¿No ha encontrado lo que necesita?... </b>Consultenos, proSton.es puede suministrar todas sus <a href="#">ideas<font style="color:black"> o</font> proyectos</a>.
	<br><br>
	Utilice nuestra profesionalidad y logistica, le garantizamos la mejor relación  <b>calidad-precio</b>, con una <b>eficiente</b> entrega.
	<br><br>
	Rellene este <a href=""> formulario</a>.
</p>
<!--<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/barrabot.png">-->

</div>
</div>



<div class="clearfix">&nbsp</div>



<div class=" span12 " style="padding:10px;width:98%; border: 1px solid #134263;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;">  
<div class="titulo " style="width:10%"><p style="margin-left:10px">Servicios</p></div>

<div class="span6" style="margin-left:0px;" >
	
	     <a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=elaboracionysuministro">

		<div class="divHome span12">

			<div class="span2 iconoser">
			<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/suministro.png">
			</div>

			<div class="span4">
				<h3><font style="color:#134263; ">Elaboración</font><br><font style="color:#969696">y suministro</font></h3>
			</div>

			<div class="span6 parr">
					<p><font style="color:black"><span class="dot">•</span>Trabajamos con todas las rocas ornamentales: mármoles, granitos, calizas, areniscas, travertinos, pizarras, cuarcitas, etc...
				<br>
				<span class="dot">•</span>Las elaboramos en despieces estandar  y a las medidas que nos solicite.</font></p>



			</div>
		</div>
			</a>



			<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=herramientasdigitales">	
					<div class="divHome span12">
						<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/presupuesto.png"></div>
						<div class="span4"><h3><font style="color:#134263">Diseñador virtual </font><br><font style="color:#969696">Presupuesto online</font></h3></div>
							<div class="span6 parr"> <p><span class="dot">•</span>Conviertase en su propio decorador... utilice nuestros "<font color="orange">escenarios</font>" para comparar los materiales seleccionando la combinación que mas le guste.<br><br>
								<span class="dot">•</span> Obtenga el <font color="orange">presupuesto online </font>de todas ellas.</p></div>
							</div>

						</a>	

					
				<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=transporteadomicilio">	
					<div class="divHome span12">
						<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/transporte.png"></div>
						<div class="span4"><h3><font style="color:#134263">Transporte  </font><br><font style="color:#969696"> a 
							domicilio</font></h3></div>
							<div class="span6 parr"> <p><span class="dot">•</span>proSton.es tiene como objetivo ofrecer la mayor  rapidez en el suministro de sus encargos.<br><br>
								<span class="dot">•</span>Con su compra, facilitamos el numero de seguimiento de su pedido; manteniendo su material bajo control. </p></div>
							</div>

						</a>	
						<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=colocaciondemateriales">	
							<div class="divHome span12">
								<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/colocacion.png"></div>
								<div class="span4"><h3><font style="color:#134263">Colocación</font><br><font style="color:#969696">de materiales </font></h3></div>
								<div class="span6 parr"><p><span class="dot">•</span>Si no dispone de un profesional que le instale nuestros materiales, facilitamos colocadores con experiencia.<br><span class="dot">•</span>La plataforma proSton posee competentes equipos de colocación cerca de su domicilio.</p></div>
							</div>

						</a>	

					</div>

					<div class=" span6" style="margin-left:10px;">

						<div class="clearfix"></div>
						<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=proveedoresyofertas">
							<div class="divHome span12">
								<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/stock.png"></div>
								<div class="span4"><h3><font style="color:#134263">Tarifas - Ofertas</font><br><font style="color:#969696">Empresas del sector</font></h3></div>
								<div class="span6 parr"><p><span class="dot">•</span>Ponemos a su disposición el stock de diferentes fábricas, ofertaremos algunas partidas a los precios mas baratos del mercado.<br>
									<span class="dot">•</span>Informaremos a nuestros visitantes sobre las empresas del sector.</p></div>
								</div>
							</a>
							<a href="<?php echo Yii::app()->request->baseUrl?>/index.php//tipo/verCaracteristicas/id">
								<div class="divHome span12">
									<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/catalogo.png"></div>
									<div class="span4"><h3><font style="color:#134263">Catálago</font> <br><font style="color:#969696">de materiales</font></h3></div>
									<div class="span6 parr" > <p><span class="dot">•</span>Nuestro catalogo incluye las fotografias y las caracteristicas fisico-mecánicas de todos los materiales que vendemos.<br>
										<span class="dot">•</span>Solo incluimos en el catalogo las rocas que tengan la mejor relación calidad-precio.</p></div>
									</div>
								</a>
								<div class="clearfix"></div>
								<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=asesoramiento">	
									<div class="divHome span12">
										<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/asesoramiento.png"></div>
										<div class="span4"><h3><font style="color:#134263">Asesoramiento</font><br><font style="color:#969696"> Ayuda técnica</font></h3></div>
										<div class="span6 parr"><p><span class="dot">•</span>Solicitenos, sin ningún compromiso, información sobre los materiales y sus acabados; podrá elegir lo mas adecuado para su obra.<br><span class="dot">•</span>Poseemos un cualificado departamento técnico, capacitado para realizar sus proyectos.
										</p></div>
									</div>
								</a>
								<div class="clearfix"></div>
								<a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=atencionpersonalizada">

									<div class="divHome span12">
										<div class="span2 iconoser"><img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/servicios/atencion.png"></div>
										<div class="span4"><h3><font style="color:#134263">Atención</font><br><font style="color:#969696">personalizada</font></h3></div>
										<div class="span6 parr"><p><span class="dot">•</span>Disponemos de talleres en todas las regiones de España.<br>
											<span class="dot">•</span>Será atendido por profesionales que podrán enseñarle los materiales a suministrar, medir su obra, colocar lo que nos compre, etc</p></div>
										</div>







									</div>
</a>
								</div>

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
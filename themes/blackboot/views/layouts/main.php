<?php
Yii::app()->clientscript
		// use it when you need it!
		/*
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )*/
		->registerCoreScript( 'jquery' )/*
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		*/
		?>
		<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=viewport content="width=device-width, initial-scale=1">

<meta name="msvalidate.01" content="9D772A7448CDD4689B4167F238BEB9F3" />
<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" /> 

		

			

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ehpestilos.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/view.css" media="all">-->
<link href="<?php echo Yii::app()->baseUrl; ?>/css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/elastislide.css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title><?php echo CHtml::encode($this->pageTitle); ?></title>


<script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/jflow.plus.js" type="text/javascript"></script>
	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.elevatezoom.js" type="text/javascript"></script> 

</head>

<body>



<?php include_once("analyticstracking.php") ?>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner row">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>
			<!--<a class="brand offset3" href="#"><?php //echo Yii::app()->name ?></a>-->
			<div id="logo"> <a href="<?php echo Yii::app()->baseUrl?>/"><img alt="www.proSton.es - Suministro de materiales" class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a></div>
			<div id="logomini"> <a href="<?php echo Yii::app()->baseUrl?>/"><img alt="www.proSton.es - Suministro de materiales" class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo_mini.png" /></a></div>

			<div class="nav-collapse" id="menu-top">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions' => array( 'class' => 'nav' ),
					'activeCssClass'	=> 'active',
					'items'=>array(
						array('label'=>'Presupuesto online', 'url'=>array('/presupuesto'), 'active'=> Yii::app()->controller->id == "presupuesto"),
						array('label'=>'Diseñador', 'url'=>array('/simulador/index/id/12'),'active'=> Yii::app()->controller->id == "simulador"),
						array('label'=>'Catálogo', 'url'=>array('/tipo/verCaracteristicas/id/12'),'active'=> Yii::app()->controller->id == "tipo"),
						array('label'=>'Tarifas', 'url'=>array('/preciounitario/index')),
						array('label'=>'Empresa', 'url'=>array('/site/page','view'=>'empresa')),								
						/*array('label'=>'Empresa', 'url'=>('#'),'items'=>array(
							array('label'=>'Reformas - Rehabilitación', 'url'=>array('/site/page','view'=>'reformas')),
							array('label'=>'Edificación - Unifamiliares', 'url'=>array('/site/page','view'=>'edificacion_unifamiliares')),
							array('label'=>'Interiorismo - Cocinas y baños', 'url'=>array('/site/page','view'=>'interiorismo_cocinas')),
							array('label'=>'Mamposteria - Urbanización', 'url'=>array('/site/page','view'=>'mamposteria_urbanizacion')),
							
							),),*/
						array('label'=>'Contacto', 'url'=>array('/site/contact')),	
						array('label'=>'Información técnica', 'url'=>array('/site/page','view'=>'informacion_tecnica')),
							
						array('label'=>'Mi cuenta', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Cuenta ('.Yii::app()->user->name.')', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest)/*,
						array('label'=>'Cerrar sesión', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)*/
						
						),)); ?>
						
			</div><!--/.nav-collapse -->

			<div class="telefonodiv" id="telediv" > <img alt="Email y teléfono - www.proston.es" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono.png" /></div>
			<div class="telefonodiv2" id="telediv2" style="display:none"> <img alt="Email y teléfono - www.proston.es" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono2.png" /></div>

		</div>
	</div>
		

	<div class="cont">
		<div class="container-fluid">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
						'homeLink'=>false,
						'tagName'=>'ul',
						'separator'=>'',
						'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
						'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
						'htmlOptions'=>array ('class'=>'breadcrumb')
						)); ?>
						<!-- breadcrumbs -->
					<?php endif?>

					<?php echo $content ?>


		</div><!--/.fluid-container-->
	</div>









			<div class="extra" id="menu-bot">
				<div class="container">
					<div class="row">
						<div class="span4 ">
							
							<div class="span8 " style="margin-left:60px; line-height:12px;">
							<img style="float:left" width="70"  alt="Linkedin - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logoblanco.png"> 
							<p style=" margin-top:15px!important; margin-left:86px; color:#666666">Nuestras oficinas están situadas en: <br>Avda. Jose Anselmo Clavé 49 - 9A .<br> 50004 Zaragoza (España).</p>
							</div>
							<div class="span12 bancos" style="margin-left:60px;">
							<h4><span style="font-size:12px">Trabajamos con :</span></h4>
							<img   alt="Ibercaja - www.proston.es" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/ibercaja.png">
							<img   alt="BBVA - www.proston.es" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/bbva.png">
							</div>

						</div> 

					<div class="span8 infomenu" style="float:right; margin-right:35px; width:790px;">
						<div class="span2">
							<h4><img   alt="Informacion - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/info.png"> proSton.es</h4>
							<ul>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#quienesomos">QUIENES SOMOS</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#avisolegal">AVISO LEGAL</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#condicionesutilizacion">CONDICIONES DE UTILIZACIÓN</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#politicadeprivacidad">POLÍTICA DE PRIVACIDAD</a></li>
							</ul>
						</div> 
						<div class="span2">
						<h4><img   alt="Comprar - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/comprar.png"> 
							Comprar</h4>
							<ul>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#condicionesdeventa">CONDICIONES DE VENTA</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#comorealizarunacompra">COMO REALIZAR UNA COMPRA</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#formadepago">FORMA DE PAGO</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#anulaciondepedido">ANULACION DE PEDIDO</a></li>

							</ul>
						</div> 
						<div class="span2"><h4><img   alt="Envios - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/envio.png"> 
							Suministros</h4>
							<ul>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#envios">ENVIOS</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#plazosdeentrega">PLAZOS DE ENTREGA</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#seguimientodelpedido">SEGUIMIENTO DE PEDIDO</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#devoluciones">DEVOLICIONES</a></li>
								
								
							</ul>
						</div> 



						<div class="span2"><h4><img   alt="Ayuda - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ayuda.png">
							Ayuda</h4>
							<ul style="width:170px;">
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#preguntasfrecuentes">PREGUNTAS FRECUENTES</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#atencionalcliente">ATENCIÓN AL CLIENTE</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#seguridad">SEGURIDAD</a></li>
								<li><span class="dot" style="color:#134263">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#anomaliastecnicas">ANOMALIAS TÉCNICAS</a></li>

							</ul>
						</div> <!-- /span3 -->
					</div>
				</div> <!-- /row -->
			</div> <!-- /container -->
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3" style="margin-left:70px;">
						<img   alt="Facebook - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/fb.png">

						<img   alt="Youtube - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/youtube.png">
						<a href="https://twitter.com/proStones" target="blank">
						<img   alt="Twitter - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/twitter.png">
						</a>
								<a href="https://www.linkedin.com/company/proston-es" target="blank">
								<img   alt="Linkedin - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/linkedin.jpg">
								</a>
								<a href="https://plus.google.com/103620278599603888414/posts" target="blank">
								<img   alt="Google +- www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/googleplus.jpg">
					</div>
					<div id="footer-terms" class="col-md-6" style="margin-right:55px; margin-top:8px;">	
						© 2014  proSton.es . Todos los derechos reservados. V2.0<!--<a href="http://nachi.me.pn" target="_blank">Nachi</a>.-->
					</div> <!-- /row -->
				</div> <!-- /container -->
			</div>
			<?php if(!empty(Yii::app()->params['debugContent'])):?>
				<?php echo Yii::app()->params['debugContent'];?>
			<?php endif;?>
		</div>	


			
<!--<a title="Web Analytics" href="http://clicky.com/100770405"><img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100770405); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100770405ns.gif" /></p></noscript>

-->
	
</body>
</html>

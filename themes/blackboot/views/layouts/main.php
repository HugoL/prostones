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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="es">

<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="language" content="es" />
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
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>
			<!--<a class="brand offset3" href="#"><?php //echo Yii::app()->name ?></a>-->
			<div > <a href="<?php echo Yii::app()->baseUrl?>/"><img alt="www.proSton.es - Suministro de materiales" class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a></div>

			<div class="nav-collapse" id="menu-top">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions' => array( 'class' => 'nav' ),
					'activeCssClass'	=> 'active',
					'items'=>array(
						array('label'=>'Presupuesto online', 'url'=>array('/presupuesto'), 'active'=> Yii::app()->controller->id == "presupuesto"),
						array('label'=>'Diseñador', 'url'=>array('/simulador/index/id/12'),'active'=> Yii::app()->controller->id == "simulador"),
						array('label'=>'Catálogo', 'url'=>array('/tipo/verCaracteristicas/id/12'),'active'=> Yii::app()->controller->id == "tipo"),
						array('label'=>'Tarifas', 'url'=>array('/preciounitario/index')),
						array('label'=>'Empresa', 'url'=>array('/site/page','view'=>'reformas')),								
						/*array('label'=>'Empresa', 'url'=>('#'),'items'=>array(
							array('label'=>'Reformas - Rehabilitación', 'url'=>array('/site/page','view'=>'reformas')),
							array('label'=>'Edificación - Unifamiliares', 'url'=>array('/site/page','view'=>'edificacion_unifamiliares')),
							array('label'=>'Interiorismo - Cocinas y baños', 'url'=>array('/site/page','view'=>'interiorismo_cocinas')),
							array('label'=>'Mamposteria - Urbanización', 'url'=>array('/site/page','view'=>'mamposteria_urbanizacion')),
							
							),),*/
						array('label'=>'Contacto', 'url'=>array('/site/contact')),	
						array('label'=>'Información técnica', 'url'=>array('/site/page','view'=>'informacion_tecnica')),
							
						array('label'=>'Mi cuenta', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),)); ?>
						
			</div><!--/.nav-collapse -->

			<div class="telefonodiv" > <img alt="Email y teléfono - www.proston.es" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono.png" /></div>


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
						<div class="span4">
							<div class="span12">
							
								<h4>Siguenos próximamente en:</h4>
								<img   alt="Facebook - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/fb.png">
								<img   alt="Youtube - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/youtube.png">
								<img   alt="Twitter - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/twitter.png">
							

							</div>
							<div class="clearfix">&nbsp</div>

							<div class="span12 bancos">
							<h4>Trabajamos con :</h4>
							<img   alt="Ibercaja - www.proston.es" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/ibercaja.png">
							<img   alt="BBVA - www.proston.es" class="" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/bbva.png">
							</div>

						</div> 

						<div class="span8 infomenu">
						<div class="span2">
							<h4><img   alt="Informacion - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/info.png"> proSton.es</h4>
							<ul>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#quienesomos">Quienes somos</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#avisolegal">Aviso legal</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#condicionesutilizacion">Condiciones de utilización</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#politicadeprivacidad">Politica de privacidad</a></li>
							</ul>
						</div> 
						<div class="span2">
						<h4><img   alt="Comprar - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/comprar.png"> 
							Comprar</h4>
							<ul>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#condicionesdeventa">Condiciones de venta</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#comorealizarunacompra">Como realizar una compra</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#formadepago">Forma de pago</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#anulaciondepedido">Anulación del pedido</a></li>

							</ul>
						</div> 
						<div class="span2"><h4><img   alt="Envios - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/envio.png"> 
							Suministros</h4>
							<ul>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#envios">Envios</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#plazosdeentrega">Plazos de entrega</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#seguimientodelpedido">Seguimiento del pedido</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#devoluciones">Devoluciones</a></li>
								
								
							</ul>
						</div> 



						<div class="span2"><h4><img   alt="Ayuda - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/ayuda.png">
							Ayuda</h4>
							<ul>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#preguntasfrecuentes">Preguntas frecuentes</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#atencionalcliente">Atención al cliente</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#seguridad">Seguridad</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciones_privacidad#anomaliastecnicas">Anomalias técnicas</a></li>

							</ul>
						</div> <!-- /span3 -->
					</div>
				</div> <!-- /row -->
			</div> <!-- /container -->
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">

					<div id="footer-terms" class="col-md-6">
						© 2014  proSton.es . Todos los derechos reservados.<!--<a href="http://nachi.me.pn" target="_blank">Nachi</a>.-->
					</div> <!-- /row -->
				</div> <!-- /container -->
			</div>
			<?php if(!empty(Yii::app()->params['debugContent'])):?>
				<?php echo Yii::app()->params['debugContent'];?>
			<?php endif;?>



			
<!--<a title="Web Analytics" href="http://clicky.com/100770405"><img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100770405); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100770405ns.gif" /></p></noscript>

-->
	
</body>
</html>

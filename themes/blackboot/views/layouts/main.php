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
	<link href="<?php echo Yii::app()->baseUrl; ?>/css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/elastislide.css" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
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
			<div id="logo"> <a href="<?php echo Yii::app()->baseUrl?>/"><img width="180" height="40" alt="Company Name" class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a></div>
			<div id="logomini"> <a href="<?php echo Yii::app()->baseUrl?>/"><img width="93" height="62" alt="www.proSton.es - Suministro de materiales" class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo_mini.png" /></a></div>
			<div class="nav-collapse" id="menu-top">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions' => array( 'class' => 'nav' ),
					'activeCssClass'	=> 'active',
					'items'=>array(
						array('label'=>'Presupuesto online', 'url'=>array('/presupuesto'), 'active'=> Yii::app()->controller->id == "presupuesto"),
						array('label'=>'Diseñador', 'url'=>array('/simulador/index/id/12'),'active'=> Yii::app()->controller->id == "simulador"),
						array('label'=>'Catálogo', 'url'=>array('/tipo/verCaracteristicas/id/12'),'active'=> Yii::app()->controller->id == "tipo"),
						array('label'=>'Tarifas', 'url'=>array('/preciounitario/index'),'active'=> Yii::app()->controller->id == "preciounitario"),
						array('label'=>'Ofertas', 'url'=>array('/site/page','view'=>'ofertas')),
						array('label'=>'Empresa', 'url'=>array('/site/page','view'=>'empresa')),				
						array('label'=>'Contacto', 'url'=>array('/site/contact')),	
						array('label'=>'Información técnica', 'url'=>array('/site/page','view'=>'informacion-tecnica')),
							
						/*array('label'=>'Mi cuenta', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Cuenta ('.Yii::app()->user->name.')', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest)*/
						
						),)); ?>
						
			</div><!--/.nav-collapse -->

			<div class="telefonodiv" id="telediv" > <img width="320" height="36" alt="Email y teléfono - www.proston.es" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono.png" /></div>
			<div class="telefonodiv2" id="telediv2"> <img width="108" height="50" alt="Email y teléfono - www.proston.es" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono2.png" /></div>

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
				<div class="span8 oficinas">
					<img width="70" height="68"  alt="Logo Blanco - www.proston.es" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logoblanco.png"> 
					<p>Nuestro domicilio fiscal está situado en: <br>Avda. Jose Anselmo Clavé 49 .<br> 50004 Zaragoza (España).</p>
				</div>
				<div class="span12 bancos">
					<h4>Trabajamos con :</h4>
					<img width="120" height="34" alt="Ibercaja - www.proston.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/ibercaja.png">
					<img width="120" height="34" alt="BBVA - www.proston.es"  src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>logos/bbva.png">
				</div>

			</div> 
			<div class="span8 infomenu">
				<div class="span2">
					<h4>proSton.es</h4>
						<ul>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#quienesomos">QUIENES SOMOS</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#avisolegal">AVISO LEGAL</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#condicionesutilizacion">CONDICIONES DE UTILIZACIÓN</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#politicadeprivacidad">POLÍTICA DE PRIVACIDAD</a></li>
						</ul>
				</div> 
				<div class="span2">
					<h4>Comprar</h4>
						<ul>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#condicionesdeventa">CONDICIONES DE VENTA</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#comorealizarunacompra">COMO REALIZAR UNA COMPRA</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#formadepago">FORMA DE PAGO</a></li>
							<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#anulaciondepedido">ANULACION DE PEDIDO</a></li>

						</ul>
				</div> 
				<div class="span2">
					<h4>Suministros</h4>
					<ul>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#envios">ENVIOS</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#plazosdeentrega">PLAZOS DE ENTREGA</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#seguimientodelpedido">SEGUIMIENTO DE PEDIDO</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#devoluciones">DEVOLUCIONES</a></li>
					</ul>
				</div> 

				<div class="span2">
					<h4>Ayuda</h4>
					<ul>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#preguntasfrecuentes">PREGUNTAS FRECUENTES</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#atencionalcliente">ATENCIÓN AL CLIENTE</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#seguridad">SEGURIDAD</a></li>
						<li><span class="dot azul">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/condiciones-privacidad#anomaliastecnicas">ANOMALIAS TÉCNICAS</a></li>
					</ul>
				</div> 
			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->
</div>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 redes">
				<img  width="30" height="30" alt="Facebook - www.proston.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/fb.png">
				<img  width="30" height="30" alt="Youtube - www.proSton.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/youtube.png">
				<a href="https://twitter.com/proStones" target="blank" rel="nofollow"><img width="30" height="30"   alt="Twitter - www.proSton.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/twitter.png"></a>
				<a href="https://www.linkedin.com/company/proston-es" target="blank" rel="nofollow"><img width="30" height="30"   alt="Linkedin - www.proSton.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/linkedin.jpg"></a>
				<a href="https://plus.google.com/103620278599603888414/posts" target="blank" rel="nofollow"><img width="30" height="30"   alt="Google plus - www.proSton.es" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>iconos/googleplus.jpg"></a>
			</div>
			<div id="footer-terms" class="col-md-6">	
				© 2014  proSton.es . Todos los derechos reservados. V2.0<!--<a href="http://nachi.me.pn" target="_blank">Nachi</a>.-->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div>
		<?php if(!empty(Yii::app()->params['debugContent'])):?>
		<?php echo Yii::app()->params['debugContent'];?>
		<?php endif;?>
</div>	

	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script  src="<?php echo Yii::app()->baseUrl; ?>/js/jflow.plus.js" type="text/javascript"></script>
	
	
</body>
</html>

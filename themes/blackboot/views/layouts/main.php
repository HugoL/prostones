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
			 <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" /> 

			<title><?php echo CHtml::encode($this->pageTitle); ?></title>
			<meta name="language" content="es" />
			<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ehpestilos.css" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/elastislide.css" />

<!-- Le fav and touch icons -->



<!--<script src="<?php echo Yii::app()->baseUrl; ?>/js/modernizr.custom.17475.js?>"></script>-->

<!--slider configuracion-->

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::app()->baseUrl; ?>/js/jflow.plus.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.elevatezoom.js?>" type="text/javascript"></script> 
    <!-- link to magiczoomplus.js file -->
<script src="<?php echo Yii::app()->baseUrl; ?>/js/magiczoom.js" type="text/javascript"></script>


  



<!--<script type="text/javascript" src="jquery.js"></script>-->
 
</head>

<body>


	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<!--<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>-->
			<!--<a class="brand offset3" href="#"><?php //echo Yii::app()->name ?></a>-->
			<div > <a href="<?php echo Yii::app()->request->baseUrl?>/index.php"><img  class="brand logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" /></a></div>

			<div class="nav-collapse" id="menu-top">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions' => array( 'class' => 'nav' ),
					'activeCssClass'	=> 'active',
					'items'=>array(
						array('label'=>'Presupuesto online', 'url'=>array('/presupuesto'), 'active'=> Yii::app()->controller->id == "presupuesto"),
						array('label'=>'Diseñador', 'url'=>array('/simulador/index/id'),'active'=> Yii::app()->controller->id == "simulador"),
						array('label'=>'Catálogo', 'url'=>array('/tipo/verCaracteristicas/id/12'),'active'=> Yii::app()->controller->id == "tipo"),
						array('label'=>'Tarifas', 'url'=>array('/preciounitario/index')),							
						array('label'=>'Empresa', 'url'=>array('/site/page', 'view'=>'about'),'items'=>array(
							array('label'=>'Reformas - Rehabilitación', 'url'=>array('/site/page','view'=>'reformas')),
							array('label'=>'Pisos - Unifamiliares', 'url'=>array('/site/page','view'=>'pisos_unifamiliares')),
							array('label'=>'Interiorismo - Cocinas y baños', 'url'=>array('/site/page','view'=>'interiorismo_cocinas')),
							array('label'=>'Edificación - Urbanización', 'url'=>array('/site/page','view'=>'edificacion_urbanizacion')),
							array('label'=>'Paisajismo - Mamposteria', 'url'=>array('/site/page','view'=>'paisajismo_mamposteria')),
							),),
						array('label'=>'Contacto', 'url'=>array('/site/contact')),	
						array('label'=>'Mi cuenta', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),)); ?>
						
			</div><!--/.nav-collapse -->

			<div style="float:right;" > <img  style="margin-right:10px" class="brand telefono" src="<?php echo Yii::app()->baseUrl; ?>/images/telefono.png" /></div>


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
							<h4>Siguenos en:</h4>
							<img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/fb.png">
							<img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/youtube.png">
							<img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/twitter.png">
							<br>

							<h4>Recibe nuestras novedades:</h4>
							<input type="text" >



						</div> 
						<div class="span8" style="border:1px solid black;border: 1px solid #bbbbbb;
						-webkit-border-radius: 4px;
						-moz-border-radius: 4px;
						border-radius: 4px;
						-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
						-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
						box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
						">
						<div class="span2">
							<h4><img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/info.png"> proSton.es</h4>
							<ul>
								<li><span class="dot">•</span><a href="#">Aviso legal</a></li>
								<li><span class="dot">•</span><a href="#">Condiciones de uso</a></li>
								<li><span class="dot">•</span><a href="#">Politica de privacidad </a></li>
								<li><span class="dot">•</span><a href="#">Politica de  uso</a></li>
								<li><span class="dot">•</span><a href="#">Protección de datos <br>personales</a></li>
							</ul>
						</div> 
						<div class="span2"><h4><img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/envio.png"> 
							Envios</h4>
							<ul>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=envios">+Envíos y plazos entrega</a></li>
								<li><span class="dot">•</span><a href="#">Política de devoluciones</a></li>
								<li><span class="dot">•</span><a href="#">Forma de pago</a></li>

							</ul>
						</div> 
						<div class="span2"><h4><img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/comprar.png"> 
							Comprar</h4>
							<ul>
								<li><a href="#"><span class="dot">•</span>Preguntas frecuentes</a></li>
								<li><span class="dot">•</span><a href="#">Comprar en tres pasos</a></li>
								<li><span class="dot">•</span><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/page?view=condiciondesuministro">+Condiciones de suministro</a></li>
								
							</ul>
						</div> 



						<div class="span2"><h4><img   alt="" class="iconofoot" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['images'] ?>/iconos/ayuda.png">
							Ayuda</h4>
							<ul>
								<li><span class="dot">•</span><a href="#">Servicio al cliente</a></li>
								<li><span class="dot">•</span><a href="#">FAQ general</a></li>

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
		</body>
		</html>

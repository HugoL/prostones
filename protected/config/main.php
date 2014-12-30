<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(

    'modules'=>array(
        'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),                      
        ),
    ),

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'proSton.es',
	'theme'=>'blackboot',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.galleria.*',
		'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'ext.YiiMailer.YiiMailer',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(

			'class'=>'system.gii.GiiModule',
			'password'=>'easenjo',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),

		'user'=>array(
            'tableUsers' => 'users',
            'tableProfiles' => 'profiles',
            'tableProfileFields' => 'profiles_fields',
            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
 
            # automatically login from registration
            'autoLogin' => true,
 
            # registration path
            //'registrationUrl' => array('/user/registration'),
		
			//'registrationCompanyUrl' => array('/user/registrationcompany'),
 
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),

        'rights'=>array(
            'superuserName'=>'Admin', // Name of the role with super user privileges. 
           'authenticatedName'=>'Authenticated',  // Name of the authenticated user role. 
           'userIdColumn'=>'id', // Name of the user id column in the database. 
           'userNameColumn'=>'username',  // Name of the user name column in the database. 
           'enableBizRule'=>true,  // Whether to enable authorization item business rules. 
           'enableBizRuleData'=>true,   // Whether to enable data for business rules. 
           'displayDescription'=>true,  // Whether to use item description instead of name. 
           'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
           'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
           'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
           'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights. 
           'appLayout'=>'application.views.layouts.main', // Application layout. 
           'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
           'install'=>false,  // Whether to enable installer. 
           'debug'=>false, 
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
                'class'=>'RWebUser',
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
                'loginUrl'=>array('/user/login'),
        ),
        'authManager'=>array(
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'authitem',
            'itemChildTable'=>'authitemchild',
            'assignmentTable'=>'authassignment',
            'rightsTable'=>'rights',
        ),

		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
      
        'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts'
        ),
        'Smtpmail'=>array(
            'class'=>'application.extensions.smtpmail.PHPMailer',
            'Host'=>"mail.proston.es",
            'Username'=>'info@proston.es',
            'Password'=>'123456789',
            'Mailer'=>'smtp',
            'Port'=>5025,
            'SMTPAuth'=>true, 
        ),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
                'home' => 'site/index',
                'tarifas/precio/marmol-granito' => 'preciounitario/index',
                'contacto' => 'site/contact',
                'presupuesto-online' => 'presupuesto',
                '<view:[a-zA-Z0-9-_-]+>/'=>'site/page',
                
                /*array(
                    'class' => 'application.components.ProductURLRule',
                    'connectionID' = 'db',
                   ),*/

                'catalogo/marmol/blanco-macael' => 'tipo/verCaracteristicas/id/12',
                'catalogo/marmol/crema-marfil' => 'tipo/verCaracteristicas/id/14',
                'catalogo/marmol/crema-levante' => 'tipo/verCaracteristicas/id/15',
                'catalogo/marmol/beige-levante' => 'tipo/verCaracteristicas/id/16',
                'catalogo/marmol/emperador-claro' => 'tipo/verCaracteristicas/id/17',
                'catalogo/marmol/marron-emperador' => 'tipo/verCaracteristicas/id/18',
                'catalogo/marmol/rosa-zarci' => 'tipo/verCaracteristicas/id/19',
                'catalogo/marmol/rojo-alicante' => 'tipo/verCaracteristicas/id/20',
                'catalogo/marmol/negro-marquina' => 'tipo/verCaracteristicas/id/34',
                'catalogo/marmol/rojo-coralito' => 'tipo/verCaracteristicas/id/35',

                'catalogo/granito/g664' => 'tipo/verCaracteristicas/id/27',
                'catalogo/granito/g687' => 'tipo/verCaracteristicas/id/28',
                'catalogo/granito/gris-parga' => 'tipo/verCaracteristicas/id/29',
                'catalogo/granito/rosa-porrino' => 'tipo/verCaracteristicas/id/30',
                'catalogo/granito/mondariz' => 'tipo/verCaracteristicas/id/31',
                'catalogo/granito/gran-perla' => 'tipo/verCaracteristicas/id/32',
                'catalogo/granito/pedras-salgadas' => 'tipo/verCaracteristicas/id/37',
                'catalogo/granito/azul-extremadura' => 'tipo/verCaracteristicas/id/39',
                'catalogo/granito/negro-ochavo' => 'tipo/verCaracteristicas/id/40',
                'catalogo/granito/amarillo-restaurador' => 'tipo/verCaracteristicas/id/42',

				
                'diseñador/marmol/blanco-macael' => 'simulador/index/id/12',
                'diseñador/marmol/crema-marfil' => 'simulador/index/id/14',
                'diseñador/marmol/crema-levante' => 'simulador/index/id/15',
                'diseñador/marmol/beige-levante' => 'simulador/index/id/16',
                'diseñador/marmol/emperador-claro' => 'simulador/index/id/17',
                'diseñador/marmol/marron-emperador' => 'simulador/index/id/18',
                'diseñador/marmol/rosa-zarci' => 'simulador/index/id/19',
                'diseñador/marmol/rojo-alicante' => 'simulador/index/id/20',
                'diseñador/marmol/negro-marquina' => 'simulador/index/id/34',
                'diseñador/marmol/rojo-coralito' => 'simulador/index/id/35',

                'diseñador/granito/g664' => 'simulador/index/id/27',
                'diseñador/granito/g687' => 'simulador/index/id/28',
                'diseñador/granito/gris-parga' => 'simulador/index/id/29',
                'diseñador/granito/rosa-porrino' => 'simulador/index/id/30',
                'diseñador/granito/mondariz' => 'simulador/index/id/31',
                'diseñador/granito/gran-perla' => 'simulador/index/id/32',
                'diseñador/granito/pedras-salgadas' => 'simulador/index/id/37',
                'diseñador/granito/azul-extremadura' => 'simulador/index/id/39',
                'diseñador/granito/negro-ochavo' => 'simulador/index/id/40',
                'diseñador/granito/amarillo-restaurador' => 'simulador/index/id/42',






                'gii'=>'gii',
            	'gii/<controller:\w+>'=>'gii/<controller>',
            	'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
             
			),

        
		),
		//Yii-PDF
		 'ePdf' => array(
        'class'         => 'application.extensions.yii_pdf.EYiiPdf',
        'params'        => array(
            'mpdf'     => array(
                'librarySourcePath' => 'application.vendors.mpdf.*',
                'constants'         => array(
                    '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
                ),
                'class'=>'mpdf', // the literal class filename to be loaded from the vendors folder
                /*'defaultParams'     => array( // More info: http://mpdf1.com/manual/index.php?tid=184
                    'mode'              => '', //  This parameter specifies the mode of the new document.
                    'format'            => 'A4', // format A4, A5, ...
                    'default_font_size' => 0, // Sets the default document font size in points (pt)
                    'default_font'      => '', // Sets the default font-family for the new document.
                    'mgl'               => 15, // margin_left. Sets the page margins for the new document.
                    'mgr'               => 15, // margin_right
                    'mgt'               => 16, // margin_top
                    'mgb'               => 16, // margin_bottom
                    'mgh'               => 9, // margin_header
                    'mgf'               => 9, // margin_footer
                    'orientation'       => 'P', // landscape or portrait orientation
                )*/
            ),
            'HTML2PDF' => array(
                'librarySourcePath' => 'application.vendors.html2pdf.*',
                'classFile'         => 'html2pdf.class.php', // For adding to Yii::$classMap
                /*'defaultParams'     => array( // More info: http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil
                    'orientation' => 'P', // landscape or portrait orientation
                    'format'      => 'A4', // format A4, A5, ...
                    'language'    => 'en', // language: fr, en, it ...
                    'unicode'     => true, // TRUE means clustering the input text IS unicode (default = true)
                    'encoding'    => 'UTF-8', // charset encoding; Default is UTF-8
                    'marges'      => array(5, 5, 5, 8), // margins by default, in order (left, top, right, bottom)
                )*/
            )
        	),
    	),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).txanponetatik'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ehprostones',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'easenjo',
			'charset' => 'utf8',
			'tablePrefix' => 'ehp_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				 /*array(
                	'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                	'ipFilters'=>array('127.0.0.1','192.168.1.215'),
            	),*/
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'debugContent'=>'',
		// this is used in contact page
		'images' => '/images/',
		'imagenes'=>'/images/textura/',
		'adminEmail'=>'skuder.zgz@gmail.com',
        'prostonesEmail'=>'info@proston.es',
		'imagenes'=>'/images/textura/',
	),
    'catchAllRequest'=>file_exists(dirname(__FILE__).'/.maintenance')
        ? array('site/maintenance') : null,    
);
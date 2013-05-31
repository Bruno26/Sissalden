<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
		

	<!-- Linea para crear el favicon de la pagina  -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" type="image/x-icon" />


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
	$global = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'D' || 'C' || 'S1' || 'S2') ? true : false ;				
	$admi = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'A') ? true : false ;			
	$S1 = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'S1') ? true : false ;
	$S2 = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'S2') ? true : false ;
	$C = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'C') ? true : false ;
	$D = (isset(Yii::app()->user->in_tipo_usuario) and Yii::app()->user->in_tipo_usuario == 'D') ? true : false ;
	$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Inicio', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Usuario', 'url'=>array('/usuario/index'), 'visible' => $admi),
				array('label'=>'Acta', 'url'=>array('/acta/index'), 'visible' => $S1   ),
				array('label'=>'Informe', 'url'=>array('/informe/index')),
				array('label'=>'Asignar Consultorio', 'url'=>array('/consultorioPromotores/index'), 'visible' => $C),
				array('label'=>'Vectores', 'url'=>array('/csaxcsa/index'), 'visible'=> $S2),
				array('label'=>'Consultorio Popular', 'url'=>array('/consultorioPopular/index'), 'visible' => $C),
		array('label'=>'Parroquia', 'url'=>array('/Parroquia/index'), 'visible' => $C),
				array('label'=>'Asic', 'url'=>array('/asic/index'), 'visible' => $C),
				array('label'=>'Sub Actividades', 'url'=>array('/subActividades/index'), 'visible' => $C),
				array('label'=>'Actividades', 'url'=>array('/actividades/index'), 'visible' => $C),
				array('label'=>'Promotor', 'url'=>array('/promotores/index'), 'visible' => $global),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	<div id="footer">

<!--  /********************** Copyright delL yii ************************************/

		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
-->
	Todos los derechos reservados. Alcaldía de Caracas Copyright <?php echo date('Y'); ?> 
	
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

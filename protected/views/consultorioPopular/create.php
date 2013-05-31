<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Consultorios Populares','url'=>array('index')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Consultorio Popular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

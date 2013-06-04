<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Tipo de Actas','url'=>array('index')),
			array('label'=>'Listar Actividades','url'=>array('subActividades/index')),
			//array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Tipo de Acta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

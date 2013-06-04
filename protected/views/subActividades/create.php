<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Actividades','url'=>array('index')),
			array('label'=>'Listar Tipo de Acta','url'=>array('actividades/index')),
//			array('label'=>'Consultar','url'=>array('admin')),

			))
	);
?>

<h1>Registrar Actividad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

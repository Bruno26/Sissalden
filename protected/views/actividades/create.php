<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Crear',
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
			array('label'=>'Listar Actividades','url'=>array('index')),
			array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>Create Actividades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

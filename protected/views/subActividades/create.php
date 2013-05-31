<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	'Crear',
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
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Crear SubActividades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

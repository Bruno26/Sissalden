<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	'Asignar',
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
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

<h1>Asignar Consultorio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

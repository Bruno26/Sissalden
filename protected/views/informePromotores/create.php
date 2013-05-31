<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Consultar InformePromotores','url'=>array('admin')),
			))
	);
?>

<h1>Registrar InformePromotores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

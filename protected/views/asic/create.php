<?php
$this->breadcrumbs=array(
	'Asics'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List Asic','url'=>array('index')),
	array('label'=>'Manage Asic','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Asic','url'=>array('index')),
			array('label'=>'Consultar Asic','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Asic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
$this->breadcrumbs=array(
	'Csaxcsas'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List Csaxcsa','url'=>array('index')),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Vector','url'=>array('index')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Vector</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

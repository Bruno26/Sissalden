<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Atencion','url'=>array('index')),
			array('label'=>'Consultar Atencion','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Atencion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

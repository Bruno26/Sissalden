<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Manage Acta','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Actas','url'=>array('index')),
			array('label'=>'Consultar Actas','url'=>array('admin')),
			))
	);
?>

<h1>Create Acta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

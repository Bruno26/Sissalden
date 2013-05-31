<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Registrar',
);
/*
$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Manage Informe','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Consutar','url'=>array('admin')),
			))
	);
?>

<h1>Registrar Informe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

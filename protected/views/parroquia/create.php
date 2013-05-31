<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Parroquia','url'=>array('index')),
	array('label'=>'Manage Parroquia','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Listar Parroquia','url'=>array('index')),
	array('label'=>'Consultar Parroquia','url'=>array('admin')),
	),
));
?>

<h1>Crear Parroquia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'List Usuario','url'=>array('index')),
	array('label'=>'Manage Usuario','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Listar Usuario','url'=>array('index')),
	array('label'=>'Consultar Usuario','url'=>array('admin')),
	),
));
?>

<h1>Crear Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

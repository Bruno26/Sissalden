<?php
$this->breadcrumbs=array(
	'Consultorios - Promotores',
);
/*
$this->menu=array(
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Asignar','url'=>array('create')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Consultorio Asignados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

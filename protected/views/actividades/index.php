<?php
$this->breadcrumbs=array(
	'Actividades',
);
/*
$this->menu=array(
	array('label'=>'Create Actividades','url'=>array('create')),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Crear Actividades','url'=>array('create')),
			array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>Actividades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

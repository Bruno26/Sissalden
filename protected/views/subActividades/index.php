<?php
$this->breadcrumbs=array(
	'Actividades',
);
/*
$this->menu=array(
	array('label'=>'Create SubActividades','url'=>array('create')),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registrar Actividad','url'=>array('create')),
			array('label'=>'Listar Tipos de Actas','url'=>array('actividades/index')),
			//array('label'=>'Consultar SubActividades','url'=>array('admin')),
			))
	);
?>

<h1>Actividades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

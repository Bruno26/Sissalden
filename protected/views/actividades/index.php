<?php
$this->breadcrumbs=array(
	'Tipo de Actas',
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
			array('label'=>'Registrar Tipo de Acta','url'=>array('create')),
			array('label'=>'Asociar Actividad','url'=>array('subActividades/create')),
			array('label'=>'Lstar Actividad','url'=>array('subActividades/index')),
			//array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>Tipo de Actas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

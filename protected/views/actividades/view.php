<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividades,
);
/*
$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Create Actividades','url'=>array('create')),
	array('label'=>'Update Actividades','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete Actividades','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ','url'=>array('index')),
			array('label'=>'Crear ','url'=>array('create')),
			array('label'=>'Modificar Actividades','url'=>array('update','id'=>$model->Array)),
//			array('label'=>'Delete Actividades','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>View Actividades #<?php echo $model->Array; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_actividades',
		'nb_actividades',
		'id_registro',
		'nb_bd_usuario',
	),
)); ?>

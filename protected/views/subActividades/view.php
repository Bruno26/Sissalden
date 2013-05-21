<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	$model->id_sub_actividades,
);

$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Create SubActividades','url'=>array('create')),
	array('label'=>'Update SubActividades','url'=>array('update','id'=>$model->id_sub_actividades)),
	array('label'=>'Delete SubActividades','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sub_actividades),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
?>

<h1>View SubActividades #<?php echo $model->id_sub_actividades; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_sub_actividades',
		'nb_sub_actividades',
		'id_registro',
		'id_actividades',
		'nb_bd_usuario',
	),
)); ?>

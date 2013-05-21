<?php
$this->breadcrumbs=array(
	'Trazas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Traza','url'=>array('index')),
	array('label'=>'Create Traza','url'=>array('create')),
	array('label'=>'Update Traza','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Traza','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Traza','url'=>array('admin')),
);
?>

<h1>View Traza #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip_traza',
		'in_tipo_movimiento_traza',
		'nb_tabla_traza',
		'id_registro_traza',
		'fe_hr_traza',
		'nb_bd_usuario',
		'nb_esquema',
	),
)); ?>

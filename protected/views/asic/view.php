<?php
$this->breadcrumbs=array(
	'Asics'=>array('index'),
	$model->id_asic,
);

$this->menu=array(
	array('label'=>'List Asic','url'=>array('index')),
	array('label'=>'Create Asic','url'=>array('create')),
	array('label'=>'Update Asic','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete Asic','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asic','url'=>array('admin')),
);
?>

<h1>View Asic #<?php echo $model->Array; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_asic',
		'nb_asic',
		'id_registro',
		'id_parroquia',
		'nb_bd_usuario',
		'id_circuito',
	),
)); ?>

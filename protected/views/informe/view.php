<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe,
);

$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Create Informe','url'=>array('create')),
	array('label'=>'Update Informe','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete Informe','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Informe','url'=>array('admin')),
);
?>

<h1>View Informe #<?php echo $model->Array; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'fch_informe',
		'fch_sub_informe',
		'id_registro',
		'id_consul_popular',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'nb_bd_usuario',
	),
)); ?>

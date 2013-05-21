<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	$model->id_consul_popular,
);

$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
	array('label'=>'Update ConsultorioPopular','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete ConsultorioPopular','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
?>

<h1>View ConsultorioPopular #<?php echo $model->Array; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_consul_popular',
		'nb_consul_popular',
		'dir_consu_popular',
		'nb_comite_salud',
		'telf_comite_salud',
		'nb_coordi_comite_salud',
		'id_registro',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'nb_bd_usuario',
	),
)); ?>

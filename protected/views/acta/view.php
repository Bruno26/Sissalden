<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	$model->id_acta,
);
/*
$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Create Acta','url'=>array('create')),
	array('label'=>'Update Acta','url'=>array('update','id'=>$model->id_acta)),
	array('label'=>'Delete Acta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Acta','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Acta','url'=>array('index')),
			array('label'=>'Crear Acta','url'=>array('create')),
			array('label'=>'Modifcar Acta','url'=>array('update','id'=>$model->id_acta)),
//			array('label'=>'Delete Acta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acta),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar Acta','url'=>array('admin')),
			))
	);
?>

<h1>View Acta #<?php echo $model->id_acta; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_acta',
		'tma_acta',
		'nb_actividades',
		'nb_sub_actividades',
		'fch_acta',
		'cant_participantes',
		'id_registro',
		'id_consul_popular',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'id_actividades',
		'id_promotor',
		'nb_bd_usuario',
	),
)); ?>

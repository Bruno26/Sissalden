<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	$model->nb_consul_popular,
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
	array('label'=>'Update ConsultorioPopular','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete ConsultorioPopular','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id_asic'=>$model->id_asic, 'id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito, 'id_consul_popular'=>$model->id_consul_popular)),
			//array('label'=>'Delete ConsultorioPopular','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar','url'=>array('admin')),			
		))
	);
?>

<h1>Consultorio Popular <?php echo $model->nb_consul_popular; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id_consul_popular',
		'circuito.nb_circuito',		
		'parroquia.nb_parroquia',
		'asic.nb_asic',
		'nb_consul_popular',
		'dir_consu_popular',
		'nb_comite_salud',
		'telf_comite_salud',
		'nb_coordi_comite_salud',
		//'id_registro',
		
		//'nb_bd_usuario',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	$model->id_consultorio_promotorer,
);

$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'Update ConsultorioPromotores','url'=>array('update','id'=>$model->id_consultorio_promotorer)),
	array('label'=>'Delete ConsultorioPromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consultorio_promotorer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Asignar','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id'=>$model->id_consultorio_promotorer)),
			//array('label'=>'Delete ConsultorioPromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consultorio_promotorer),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consiltar','url'=>array('admin')),
			))
	);
?>

<h1>Ver Consultorio Asignado <?php echo $model->id_consultorio_promotorer; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_consul_popular',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'id_promotor',
		'id_consultorio_promotorer',
	),
)); ?>

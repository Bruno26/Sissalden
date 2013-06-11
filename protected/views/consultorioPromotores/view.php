<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	$model->promotores->nb_promotor,
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'Update ConsultorioPromotores','url'=>array('update','id'=>$model->id_consultorio_promotorer)),
	array('label'=>'Delete ConsultorioPromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consultorio_promotorer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Asignar','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id'=>$model->id_consultorio_promotorer)),
			//array('label'=>'Delete ConsultorioPromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consultorio_promotorer),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h2>Consultorio Asignado a <?php echo $model->promotores->nb_promotor; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'circuito.nb_circuito',
		'parroquia.nb_parroquia',
		'asic.nb_asic',
		'consultorio.nb_consul_popular',
		'promotores.nb_promotor',
		//'id_consultorio_promotorer',
	),
)); ?>

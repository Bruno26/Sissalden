<?php
$this->breadcrumbs=array(
	'Vector'=>array('index'),
	$model->id_csaxcsa,
);
/*
$this->menu=array(
	array('label'=>'List Csaxcsa','url'=>array('index')),
	array('label'=>'Create Csaxcsa','url'=>array('create')),
	array('label'=>'Update Csaxcsa','url'=>array('update','id'=>$model->id_csaxcsa)),
	array('label'=>'Delete Csaxcsa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_csaxcsa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id'=>$model->id_csaxcsa)),
			//array('label'=>'Delete Csaxcsa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_csaxcsa),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Ver Vector <?php echo $model->id_csaxcsa; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_csaxcsa',
		'nb_jefe_familia',
		'ci_jefe_familia',
		'nacio_jefe_familia',
		'perso_beneficiadas',
		'tlf_csaxcsa',
		'charla_csaxcsa',
		'viviend_fumigada',
		'viviend_abatizada',
		'dep_encontrados',
		'focos_positivos',
		'focos_eliminados',
		'nu_casos_dengue',
		'cant_litros_abate',
		'grs_abatizacion',
		'id_registro',
		'id_atencion',
		'id_abatizacion',
		'nb_bd_usuario',
	),
)); ?>

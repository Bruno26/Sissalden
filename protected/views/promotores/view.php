<?php
$this->breadcrumbs=array(
	'Promotores'=>array('index'),
	$model->nb_promotor,
);
/*
$this->menu=array(
	array('label'=>'Listar Promotores','url'=>array('index')),
	array('label'=>'Crear Promotores','url'=>array('create')),
	array('label'=>'Modificar Promotores','url'=>array('update','id'=>$model->id_promotor)),
	array('label'=>'Eliminar Promotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_promotor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Consultar Promotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(

			array('label'=>'Listar Promotores','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id'=>$model->id_promotor)),
			array('label'=>'Eliminar ','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_promotor),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar Promotores','url'=>array('admin')),
			))
	);

?>

<h1> Promotor <?php echo $model->nb_promotor; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id_promotor',
		'nb_promotor',
		'ape_promotor',
		'ci_promotor',
		'tlf_promotor',
		'dir_promotor',
		'sexo_promotor',
		'nacio_promotor',
		'grado_academico_promoto',
		'status_promotor',
		'id_registro',
		'nb_bd_usuario',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion,
);

$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Create Atencion','url'=>array('create')),
	array('label'=>'Update Atencion','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete Atencion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
?>

<h1>View Atencion #<?php echo $model->Array; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_atencion',
		'st_atencion',
		'dir_casaxcsa',
		'id_registro',
		'id_informe',
		'nb_bd_usuario',
	),
)); ?>

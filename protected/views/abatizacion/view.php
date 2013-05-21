<?php
$this->breadcrumbs=array(
	'Abatizacions'=>array('index'),
	$model->id_abatizacion,
);

$this->menu=array(
	array('label'=>'List Abatizacion','url'=>array('index')),
	array('label'=>'Create Abatizacion','url'=>array('create')),
	array('label'=>'Update Abatizacion','url'=>array('update','id'=>$model->id_abatizacion)),
	array('label'=>'Delete Abatizacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_abatizacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Abatizacion','url'=>array('admin')),
);
?>

<h1>View Abatizacion #<?php echo $model->id_abatizacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_abatizacion',
		'cant_litros_abate',
		'grs_abatizacion',
	),
)); ?>

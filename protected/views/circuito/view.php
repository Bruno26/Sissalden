<?php
/* @var $this CircuitoController */
/* @var $model Circuito */

$this->breadcrumbs=array(
	'Circuitos'=>array('index'),
	$model->id_circuito,
);

$this->menu=array(
	array('label'=>'List Circuito', 'url'=>array('index')),
	array('label'=>'Create Circuito', 'url'=>array('create')),
	array('label'=>'Update Circuito', 'url'=>array('update', 'id'=>$model->id_circuito)),
	array('label'=>'Delete Circuito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_circuito),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Circuito', 'url'=>array('admin')),
);
?>

<h1>View Circuito #<?php echo $model->id_circuito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_circuito',
		'nb_circuito',
	),
)); ?>

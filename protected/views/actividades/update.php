<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividades=>array('view','id'=>$model->Array),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Create Actividades','url'=>array('create')),
	array('label'=>'View Actividades','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
?>

<h1>Update Actividades <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	$model->id_sub_actividades=>array('view','id'=>$model->id_sub_actividades),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Create SubActividades','url'=>array('create')),
	array('label'=>'View SubActividades','url'=>array('view','id'=>$model->id_sub_actividades)),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
?>

<h1>Update SubActividades <?php echo $model->id_sub_actividades; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
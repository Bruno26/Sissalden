<?php
$this->breadcrumbs=array(
	'Abatizacions'=>array('index'),
	$model->id_abatizacion=>array('view','id'=>$model->id_abatizacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Abatizacion','url'=>array('index')),
	array('label'=>'Create Abatizacion','url'=>array('create')),
	array('label'=>'View Abatizacion','url'=>array('view','id'=>$model->id_abatizacion)),
	array('label'=>'Manage Abatizacion','url'=>array('admin')),
);
?>

<h1>Update Abatizacion <?php echo $model->id_abatizacion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
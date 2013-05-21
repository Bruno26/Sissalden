<?php
$this->breadcrumbs=array(
	'Trazas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Traza','url'=>array('index')),
	array('label'=>'Create Traza','url'=>array('create')),
	array('label'=>'View Traza','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Traza','url'=>array('admin')),
);
?>

<h1>Update Traza <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
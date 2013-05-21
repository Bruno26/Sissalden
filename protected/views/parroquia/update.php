<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	$model->id_parroquia=>array('view','id'=>$model->Array),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parroquia','url'=>array('index')),
	array('label'=>'Create Parroquia','url'=>array('create')),
	array('label'=>'View Parroquia','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Parroquia','url'=>array('admin')),
);
?>

<h1>Update Parroquia <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
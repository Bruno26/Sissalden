<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion=>array('view','id'=>$model->Array),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Create Atencion','url'=>array('create')),
	array('label'=>'View Atencion','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
?>

<h1>Update Atencion <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
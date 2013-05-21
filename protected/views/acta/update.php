<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	$model->id_acta=>array('view','id'=>$model->id_acta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Create Acta','url'=>array('create')),
	array('label'=>'View Acta','url'=>array('view','id'=>$model->id_acta)),
	array('label'=>'Manage Acta','url'=>array('admin')),
);
?>

<h1>Update Acta <?php echo $model->id_acta; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
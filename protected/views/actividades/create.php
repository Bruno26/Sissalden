<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
?>

<h1>Create Actividades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
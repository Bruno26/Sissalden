<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
?>

<h1>Create SubActividades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
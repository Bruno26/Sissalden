<?php
$this->breadcrumbs=array(
	'Abatizacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Abatizacion','url'=>array('index')),
	array('label'=>'Manage Abatizacion','url'=>array('admin')),
);
?>

<h1>Create Abatizacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
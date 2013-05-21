<?php
$this->breadcrumbs=array(
	'Asics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asic','url'=>array('index')),
	array('label'=>'Manage Asic','url'=>array('admin')),
);
?>

<h1>Create Asic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
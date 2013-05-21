<?php
$this->breadcrumbs=array(
	'Trazas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Traza','url'=>array('index')),
	array('label'=>'Manage Traza','url'=>array('admin')),
);
?>

<h1>Create Traza</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
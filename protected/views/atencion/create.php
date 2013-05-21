<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
?>

<h1>Create Atencion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
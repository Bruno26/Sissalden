<?php
$this->breadcrumbs=array(
	'Circuitos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Circuito','url'=>array('index')),
	array('label'=>'Manage Circuito','url'=>array('admin')),
);
?>

<h1>Create Circuito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
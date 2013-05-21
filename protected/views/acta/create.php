<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Manage Acta','url'=>array('admin')),
);
?>

<h1>Create Acta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
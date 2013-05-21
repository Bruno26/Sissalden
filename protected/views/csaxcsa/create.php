<?php
$this->breadcrumbs=array(
	'Csaxcsas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Csaxcsa','url'=>array('index')),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
?>

<h1>Create Csaxcsa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
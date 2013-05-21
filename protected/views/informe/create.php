<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Manage Informe','url'=>array('admin')),
);
?>

<h1>Create Informe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
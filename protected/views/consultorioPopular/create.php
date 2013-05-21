<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
?>

<h1>Create ConsultorioPopular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
?>

<h1>Create ConsultorioPromotores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
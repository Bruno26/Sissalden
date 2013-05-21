<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
?>

<h1>Create InformePromotores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
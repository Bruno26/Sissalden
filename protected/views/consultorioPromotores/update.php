<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	$model->id_consultorio_promotorer=>array('view','id'=>$model->id_consultorio_promotorer),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'View ConsultorioPromotores','url'=>array('view','id'=>$model->id_consultorio_promotorer)),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
?>

<h1>Update ConsultorioPromotores <?php echo $model->id_consultorio_promotorer; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
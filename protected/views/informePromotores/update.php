<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	$model->id_informe_promotor=>array('view','id'=>$model->id_informe_promotor),
	'Update',
);

$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Create InformePromotores','url'=>array('create')),
	array('label'=>'View InformePromotores','url'=>array('view','id'=>$model->id_informe_promotor)),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
?>

<h1>Update InformePromotores <?php echo $model->id_informe_promotor; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
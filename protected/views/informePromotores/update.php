<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	$model->id_informe_promotor=>array('view','id'=>$model->id_informe_promotor),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Create InformePromotores','url'=>array('create')),
	array('label'=>'View InformePromotores','url'=>array('view','id'=>$model->id_informe_promotor)),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Ver','url'=>array('view','id'=>$model->id_informe_promotor)),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Modificar InformePromotores <?php echo $model->id_informe_promotor; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

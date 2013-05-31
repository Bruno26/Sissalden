<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	$model->id_informe_promotor,
);
/*
$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Create InformePromotores','url'=>array('create')),
	array('label'=>'Update InformePromotores','url'=>array('update','id'=>$model->id_informe_promotor)),
	array('label'=>'Delete InformePromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe_promotor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Modifcar','url'=>array('update','id'=>$model->id_informe_promotor)),
			//array('label'=>'Delete InformePromotores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe_promotor),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Ver InformePromotores <?php echo $model->id_informe_promotor; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'id_promotor',
		'nb_bd_usuario',
		'id_informe_promotor',
	),
)); ?>

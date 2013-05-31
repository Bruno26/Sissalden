<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	$model->id_sub_actividades=>array('view','id'=>$model->id_sub_actividades),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Create SubActividades','url'=>array('create')),
	array('label'=>'View SubActividades','url'=>array('view','id'=>$model->id_sub_actividades)),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Crear','url'=>array('create')),
			array('label'=>'Ver','url'=>array('view','id'=>$model->id_sub_actividades)),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Modificar SubActividades <?php echo $model->id_sub_actividades; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

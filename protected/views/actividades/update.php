<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividades=>array('view','id'=>$model->Array),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Create Actividades','url'=>array('create')),
	array('label'=>'View Actividades','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ','url'=>array('index')),
			array('label'=>'Crear ','url'=>array('create')),
			array('label'=>'Ver Actividades','url'=>array('view','id'=>$model->Array)),
			array('label'=>'Consultar Actividades','url'=>array('admin')),
			))
	);
?>

<h1>Update Actividades <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

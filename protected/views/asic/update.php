<?php
$this->breadcrumbs=array(
	'Asics'=>array('index'),
	$model->id_asic=>array('view','id'=>$model->Array),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List Asic','url'=>array('index')),
	array('label'=>'Create Asic','url'=>array('create')),
	array('label'=>'View Asic','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Asic','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Ver Asic','url'=>array('view','id'=>$model->Array)),
			array('label'=>'Consultar Asic','url'=>array('admin')),
			))
	);
?>

<h1>Modificar Asic <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

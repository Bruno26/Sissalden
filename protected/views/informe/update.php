<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	$model->id_informe=>array('view','id'=>$model->Array),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Create Informe','url'=>array('create')),
	array('label'=>'View Informe','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Informe','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar Informe','url'=>array('create')),
			array('label'=>'Ver Informe','url'=>array('view','id'=>$model->Array)),
			array('label'=>'Consultar Informe','url'=>array('admin')),
			))
	);
?>

<h1>Modificar Informe <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion=>array('view','id'=>$model->Array),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Create Atencion','url'=>array('create')),
	array('label'=>'View Atencion','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Ver Atencion','url'=>array('view','id'=>$model->Array)),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Modificar Atencion <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

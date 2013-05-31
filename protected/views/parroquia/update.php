<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	$model->nb_parroquia=>array('view','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List Parroquia','url'=>array('index')),
	array('label'=>'Create Parroquia','url'=>array('create')),
	array('label'=>'View Parroquia','url'=>array('view','id_parroquia'=>$model->id_circuito, 'id_circuito'=>$model->id_circuito)),
	array('label'=>'Manage Parroquia','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Parroquia','url'=>array('index')),
			array('label'=>'Crear Parroquia','url'=>array('create')),
			array('label'=>'Ver Parroquia','url'=>array('view','id_parroquia'=>$model->id_circuito, 'id_circuito'=>$model->id_circuito)),
			array('label'=>'Consultar Parroquia','url'=>array('admin')),
			))
	);
?>

<h1>Modificar Parroquia <?php echo $model->nb_parroquia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

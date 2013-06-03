<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	//$model->nb_parroquia,
);
/*
$this->menu=array(
	array('label'=>'List Parroquia','url'=>array('index')),
	array('label'=>'Create Parroquia','url'=>array('create')),
	array('label'=>'Update Parroquia','url'=>array('update','id'=>$model->Array)),
	array('label'=>'Delete Parroquia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parroquia','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Parroquia','url'=>array('index')),
			array('label'=>'Crear Parroquia','url'=>array('create')),
			array('label'=>'Modificar','url'=>array('update','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito)),
//			array('label'=>'Delete Parroquia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Array),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Consultar Parroquia','url'=>array('admin')),
			))
	);

?>

<h1>Ver Parroquia <?php echo $model->nb_parroquia; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_parroquia',
		'nb_parroquia',
		'circuito.nb_circuito',

	),
)); 
?>

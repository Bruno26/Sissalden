<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	$model->id_consul_popular=>array('view','id'=>$model->Array),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
	array('label'=>'View ConsultorioPopular','url'=>array('view','id'=>$model->Array)),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
?>

<h1>Update ConsultorioPopular <?php echo $model->Array; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
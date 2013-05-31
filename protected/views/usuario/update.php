<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->nb_bd_usuario=>array('view','id'=>$model->nb_bd_usuario),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Usuario','url'=>array('index')),
	array('label'=>'Create Usuario','url'=>array('create')),
	array('label'=>'View Usuario','url'=>array('view','id'=>$model->nb_bd_usuario)),
	array('label'=>'Manage Usuario','url'=>array('admin')),
);
*/

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Listar Usuario','url'=>array('index')),
	array('label'=>'Crear','url'=>array('create')),
	array('label'=>'Ver Usuario','url'=>array('view','id'=>$model->nb_bd_usuario)),
	array('label'=>'Consultar','url'=>array('admin')),
	),
));
?>

<h1>Modificar Usuario <?php echo $model->nb_bd_usuario; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->nb_bd_usuario,
);
/*
$this->menu=array(
	array('label'=>'List Usuario','url'=>array('index')),
	array('label'=>'Create Usuario','url'=>array('create')),
	array('label'=>'Update Usuario','url'=>array('update','id'=>$model->nb_bd_usuario)),
	array('label'=>'Delete Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nb_bd_usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Listar Usuario','url'=>array('index')),
	array('label'=>'Crear Usuario','url'=>array('create')),
	array('label'=>'Modificar Usuario','url'=>array('update','id'=>$model->nb_bd_usuario)),
//	array('label'=>'Delete Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nb_bd_usuario),'confirm'=>'Are you sure you want to delete this item?')),// 
	array('label'=>'Consultar Usuario','url'=>array('admin')),	),
));
?>

<h1>Ver Usuario <?php echo $model->nb_bd_usuario; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nb_usuario',
		'nu_cedula_usuario',
		'nacio_usuario',
		'nb_bd_usuario',
		//'id_registro',
		'st_usuario',
		'in_tipo_usuario',
		'nu_telefono',
		'password',
		//'last_login',
		//'create_at',
	),
)); ?>

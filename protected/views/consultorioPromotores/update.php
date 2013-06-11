<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	$model->promotores->nb_promotor=>array('view','id'=>$model->id_consultorio_promotorer),
	'Modificar',
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'View ConsultorioPromotores','url'=>array('view','id'=>$model->id_consultorio_promotorer)),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ','url'=>array('index')),
			array('label'=>'Asignar','url'=>array('create')),
			array('label'=>'Ver','url'=>array('view','id'=>$model->id_consultorio_promotorer)),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h2>Modificar Consultorio ( <?php echo $model->promotores->nb_promotor;?>)</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

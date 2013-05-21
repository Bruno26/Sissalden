<?php
$this->breadcrumbs=array(
	'Promotores'=>array('index'),
	$model->nb_promotor=>array('view','id'=>$model->id_promotor),
	'Modificar',
);
/*----------------------Menu por default
$this->menu=array(
	array('label'=>'List Promotores','url'=>array('index')),
	array('label'=>'Create Promotores','url'=>array('create')),
	array('label'=>'View Promotores','url'=>array('view','id'=>$model->id_promotor)),
	array('label'=>'Manage Promotores','url'=>array('admin')),
);
*/

$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ','url'=>array('index')),
			array('label'=>'Crear','url'=>array('create')),
			array('label'=>'Ver Promotor','url'=>array('view','id'=>$model->id_promotor)),
			array('label'=>'Consultar Promotores','url'=>array('admin')),
			))
	);
?>

<h1>Modificar Promotor <?php echo $model->nb_promotor; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>

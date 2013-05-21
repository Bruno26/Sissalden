<?php
$this->breadcrumbs=array(
	'Promotores'=>array('index'),
	'Crear',
);

/*$this->menu=array(
	array('label'=>'List Promotores','url'=>array('index')),
	array('label'=>'Manage Promotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(

			array('label'=>'Listar Promotores','url'=>array('index')),
			array('label'=>'Consultar Promotores','url'=>array('admin')),
			))
	);
?>
	
<h1>Registrar Promotor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

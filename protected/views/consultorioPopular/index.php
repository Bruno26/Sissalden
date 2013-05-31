<?php
$this->breadcrumbs=array(
	'Consultorio Popular',
);
/*
$this->menu=array(
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registrar ','url'=>array('create')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Consultorio Popular</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

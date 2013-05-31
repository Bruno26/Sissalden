<?php
$this->breadcrumbs=array(
	'Vectores',
);
/*
$this->menu=array(
	array('label'=>'Create Csaxcsa','url'=>array('create')),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registar','url'=>array('create')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Vectores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

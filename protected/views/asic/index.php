<?php

$this->breadcrumbs=array(
	'Asics',
);
/*
$this->menu=array(
	array('label'=>'Create Asic','url'=>array('create')),
	array('label'=>'Manage Asic','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registrar Asic','url'=>array('create')),
			array('label'=>'Consultar Asic','url'=>array('admin')),
			))
	);
?>

<h1>Asics</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

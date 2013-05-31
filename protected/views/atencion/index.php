<?php
$this->breadcrumbs=array(
	'Atención',
);
/*
$this->menu=array(
	array('label'=>'Create Atencion','url'=>array('create')),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registrar Atencion','url'=>array('create')),
			array('label'=>'Consultar Atencion','url'=>array('admin')),
			))
	);
?>

<h1>Atencions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

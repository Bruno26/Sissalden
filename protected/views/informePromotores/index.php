<?php
$this->breadcrumbs=array(
	'Informe Promotor',
);
/*
$this->menu=array(
	array('label'=>'Create InformePromotores','url'=>array('create')),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Registrar','url'=>array('create')),
			array('label'=>'Consultar','url'=>array('admin')),
			))
	);
?>

<h1>Informe Promotor</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

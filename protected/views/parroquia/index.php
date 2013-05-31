<?php
$this->breadcrumbs=array(
	'Parroquias',
);
/*
$this->menu=array(
	array('label'=>'Create Parroquia','url'=>array('create')),
	array('label'=>'Manage Parroquia','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Crear Parroquia','url'=>array('create')),
		array('label'=>'Consultar Parroquia','url'=>array('admin')),
	),
));

?>

<h1>Parroquias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

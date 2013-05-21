<?php
$this->breadcrumbs=array(
	'Actividades',
);

$this->menu=array(
	array('label'=>'Create Actividades','url'=>array('create')),
	array('label'=>'Manage Actividades','url'=>array('admin')),
);
?>

<h1>Actividades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

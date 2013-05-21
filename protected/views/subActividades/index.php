<?php
$this->breadcrumbs=array(
	'Sub Actividades',
);

$this->menu=array(
	array('label'=>'Create SubActividades','url'=>array('create')),
	array('label'=>'Manage SubActividades','url'=>array('admin')),
);
?>

<h1>Sub Actividades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

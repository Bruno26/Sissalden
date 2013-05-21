<?php
$this->breadcrumbs=array(
	'Trazas',
);

$this->menu=array(
	array('label'=>'Create Traza','url'=>array('create')),
	array('label'=>'Manage Traza','url'=>array('admin')),
);
?>

<h1>Trazas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

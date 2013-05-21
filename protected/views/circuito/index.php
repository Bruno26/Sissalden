<?php
$this->breadcrumbs=array(
	'Circuitos',
);

$this->menu=array(
	array('label'=>'Create Circuito','url'=>array('create')),
	array('label'=>'Manage Circuito','url'=>array('admin')),
);
?>

<h1>Circuitos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

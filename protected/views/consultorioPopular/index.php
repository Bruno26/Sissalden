<?php
$this->breadcrumbs=array(
	'Consultorio Populars',
);

$this->menu=array(
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
	array('label'=>'Manage ConsultorioPopular','url'=>array('admin')),
);
?>

<h1>Consultorio Populars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Consultorio Promotores',
);

$this->menu=array(
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
	array('label'=>'Manage ConsultorioPromotores','url'=>array('admin')),
);
?>

<h1>Consultorio Promotores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

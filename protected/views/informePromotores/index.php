<?php
$this->breadcrumbs=array(
	'Informe Promotores',
);

$this->menu=array(
	array('label'=>'Create InformePromotores','url'=>array('create')),
	array('label'=>'Manage InformePromotores','url'=>array('admin')),
);
?>

<h1>Informe Promotores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

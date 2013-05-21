<?php
$this->breadcrumbs=array(
	'Informes',
);

$this->menu=array(
	array('label'=>'Create Informe','url'=>array('create')),
	array('label'=>'Manage Informe','url'=>array('admin')),
);
?>

<h1>Informes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

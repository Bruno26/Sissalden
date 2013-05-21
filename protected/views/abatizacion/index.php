<?php
$this->breadcrumbs=array(
	'Abatizacions',
);

$this->menu=array(
	array('label'=>'Create Abatizacion','url'=>array('create')),
	array('label'=>'Manage Abatizacion','url'=>array('admin')),
);
?>

<h1>Abatizacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

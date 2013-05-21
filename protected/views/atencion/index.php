<?php
$this->breadcrumbs=array(
	'Atencions',
);

$this->menu=array(
	array('label'=>'Create Atencion','url'=>array('create')),
	array('label'=>'Manage Atencion','url'=>array('admin')),
);
?>

<h1>Atencions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

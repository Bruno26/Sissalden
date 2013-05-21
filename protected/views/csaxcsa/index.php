<?php
$this->breadcrumbs=array(
	'Csaxcsas',
);

$this->menu=array(
	array('label'=>'Create Csaxcsa','url'=>array('create')),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
?>

<h1>Csaxcsas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

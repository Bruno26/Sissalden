<?php
$this->breadcrumbs=array(
	'Actas',
);
/*
$this->menu=array(
	array('label'=>'Create Acta','url'=>array('create')),
	array('label'=>'Manage Acta','url'=>array('admin')),
);*/

$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(

			array('label'=>'Registrar Acta','url'=>array('create')),
			array('label'=>'Consultar Acta','url'=>array('admin')),
			))
	);

?>

<h1>Actas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

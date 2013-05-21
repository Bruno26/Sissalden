<?php
$this->breadcrumbs=array(
	'Promotores',
);
/*Menu por default
$this->menu=array(
	array('label'=>'Registrar Promotor','url'=>array('create')),
	array('label'=>'Consultar Promotores','url'=>array('admin')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(

			array('label'=>'Registrar Promotor','url'=>array('create')),
			array('label'=>'Consultar Promotores','url'=>array('admin')),
			))
	);
?>

<h1>Promotores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

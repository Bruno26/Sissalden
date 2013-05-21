<?php
$this->breadcrumbs=array(
	'Usuarios',
);

/*Lineas comentadas del menu por defecto que trae yii*/
$this->menu=array(
	array('label'=>'Create Usuario','url'=>array('create')),       
	array('label'=>'Manage Usuario','url'=>array('admin')),
);
/*Lineas comentadas del menu por defecto que trae yii*/

/*$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Create Usuario','url'=>array('create')),
		array('label'=>'Manage Usuario','url'=>array('admin')),
	),
));

*/
?>

<h1>Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Actividades','url'=>array('index')),
	array('label'=>'Create Actividades','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Actividades','url'=>array('index')),
			array('label'=>'Crear Actividades','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('actividades-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Actividades</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'actividades-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id_actividades',
		'nb_actividades',
		//'id_registro',
		//'nb_bd_usuario',
		/*/array(
			'class'=>'bootstrap.widgets.TbButtonColumn',// busqueda - modificacion - editar
		),*/
	),
)); ?>

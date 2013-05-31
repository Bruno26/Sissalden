<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Create SubActividades','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar SubActividades','url'=>array('index')),
			array('label'=>'Crear SubActividades','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sub-actividades-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Sub Actividades</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sub-actividades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_sub_actividades',
		'nb_sub_actividades',
		'id_registro',
		'id_actividades',
		'nb_bd_usuario',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

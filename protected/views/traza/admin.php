<?php
$this->breadcrumbs=array(
	'Trazas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Traza','url'=>array('index')),
	array('label'=>'Create Traza','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('traza-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trazas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'traza-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ip_traza',
		'in_tipo_movimiento_traza',
		'nb_tabla_traza',
		'id_registro_traza',
		'fe_hr_traza',
		/*
		'nb_bd_usuario',
		'nb_esquema',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Create Acta','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('acta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Actas</h1>

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
	'id'=>'acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_acta',
		'tma_acta',
		'nb_actividades',
		'nb_sub_actividades',
		'fch_acta',
		'cant_participantes',
		/*
		'id_registro',
		'id_consul_popular',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'id_actividades',
		'id_promotor',
		'nb_bd_usuario',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

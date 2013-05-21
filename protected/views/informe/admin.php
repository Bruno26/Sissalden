<?php
$this->breadcrumbs=array(
	'Informes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Informe','url'=>array('index')),
	array('label'=>'Create Informe','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('informe-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Informes</h1>

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
	'id'=>'informe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_informe',
		'fch_informe',
		'fch_sub_informe',
		'id_registro',
		'id_consul_popular',
		'id_asic',
		/*
		'id_parroquia',
		'id_circuito',
		'nb_bd_usuario',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

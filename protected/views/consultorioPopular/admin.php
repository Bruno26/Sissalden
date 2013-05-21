<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('consultorio-popular-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Consultorio Populars</h1>

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
	'id'=>'consultorio-popular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_consul_popular',
		'nb_consul_popular',
		'dir_consu_popular',
		'nb_comite_salud',
		'telf_comite_salud',
		'nb_coordi_comite_salud',
		/*
		'id_registro',
		'id_asic',
		'id_parroquia',
		'id_circuito',
		'nb_bd_usuario',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

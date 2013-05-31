<?php
$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Acta','url'=>array('index')),
	array('label'=>'Create Acta','url'=>array('create')),
);
*/

$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Acta','url'=>array('index')),
			array('label'=>'Crear Acta','url'=>array('create')),
			))
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

<h1>Consultar Actas</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
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
		//'id_acta',
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

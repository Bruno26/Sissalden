<?php
$this->breadcrumbs=array(
	'Asic'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Asic','url'=>array('index')),
	array('label'=>'Create Asic','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Asic','url'=>array('index')),
			array('label'=>'Registrar Asic','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('asic-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Asic</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'asic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_asic',

		//'id_registro',
		//'id_parroquia',
		array ('name'=>'id_circuito','value'=>'$data->circuito->nb_circuito','type'=>'text',),
		array ('name'=>'id_parroquia','value'=>'$data->parroquia->nb_parroquia','type'=>'text',),
		//'nb_bd_usuario',
		'nb_asic',
	/*	array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),*/
	),
)); ?>

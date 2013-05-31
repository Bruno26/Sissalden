<?php
$this->breadcrumbs=array(
	'Informe Promotores'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List InformePromotores','url'=>array('index')),
	array('label'=>'Create InformePromotores','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('informe-promotores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Informe-Promotor</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'informe-promotores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_informe',
		'id_promotor',
		'nb_bd_usuario',
		'id_informe_promotor',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Promotores'=>array('index'),
	'Consular',
);
/*---------Menu por default
$this->menu=array(
	array('label'=>'List Promotores','url'=>array('index')),
	array('label'=>'Create Promotores','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Promotores','url'=>array('index')),
			array('label'=>'Crear Promotor','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('promotores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Consultar Promotores</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'promotores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_promotor',
		'nb_promotor',
		'ape_promotor',
		'ci_promotor',
		'tlf_promotor',
		'dir_promotor',
		/*
		'sexo_promotor',
		'nacio_promotor',
		'grado_academico_promoto',
		'status_promotor',
		'id_registro',
		'nb_bd_usuario',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
));
 ?>

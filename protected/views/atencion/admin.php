<?php
$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Atencion','url'=>array('index')),
	array('label'=>'Create Atencion','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Atención','url'=>array('index')),
			array('label'=>'Consultar Atención','url'=>array('admin')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('atencion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Atención</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'atencion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_atencion',
		'st_atencion',
		'dir_casaxcsa',
		'id_registro',
		'id_informe',
		'nb_bd_usuario',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

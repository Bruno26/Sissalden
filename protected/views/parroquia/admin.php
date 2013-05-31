<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List Parroquia','url'=>array('index')),
	array('label'=>'Create Parroquia','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar Parroquia','url'=>array('index')),
			array('label'=>'Crear Parroquia','url'=>array('create')),
			))
	);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('parroquia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Parroquias</h1>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'parroquia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_parroquia',
		array ('name'=>'id_circuito','value'=>'$data->circuito->nb_circuito','type'=>'text',),
		'nb_parroquia',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

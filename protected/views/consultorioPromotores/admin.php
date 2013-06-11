<?php
$this->breadcrumbs=array(
	'Consultorio Promotores'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPromotores','url'=>array('index')),
	array('label'=>'Create ConsultorioPromotores','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ConsultorioPromotores','url'=>array('index')),
			array('label'=>'Asignar','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('consultorio-promotores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultorio-Promotores</h1>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'consultorio-promotores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_circuito',
		array ('name'=>'id_circuito','value'=>'$data->circuito->nb_circuito','type'=>'text',),
		//'id_parroquia',
		array ('name'=>'id_parroquia','value'=>'$data->parroquia->nb_parroquia','type'=>'text',),
		//'id_asic',
		array ('name'=>'id_asic','value'=>'$data->asic->nb_asic','type'=>'text',),
		//'id_consul_popular',
		array ('name'=>'id_consul_popular','value'=>'$data->consultorio->nb_consul_popular','type'=>'text',),
		//'id_promotor',
		array ('name'=>'id_promotor','value'=>'$data->promotores->nb_promotor','type'=>'text',),
		//'id_consultorio_promotorer',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

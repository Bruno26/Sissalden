<?php
$this->breadcrumbs=array(
	'Consultorio Populars'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List ConsultorioPopular','url'=>array('index')),
	array('label'=>'Create ConsultorioPopular','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Consultorios Populares','url'=>array('index')),
			array('label'=>'Registrar','url'=>array('create')),
			))
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

<h1>Consultar Consultorio Popular</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'consultorio-popular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_consul_popular',
		array ('name'=>'id_circuito','value'=>'$data->circuito->nb_circuito','type'=>'text',),
		array ('name'=>'id_parroquia','value'=>'$data->parroquia->nb_parroquia','type'=>'text',),
		array ('name'=>'id_asic','value'=>'$data->asic->nb_asic','type'=>'text',),
		'nb_consul_popular',			
		//'dir_consu_popular',
		'nb_comite_salud',
		//'telf_comite_salud',
		//'nb_coordi_comite_salud',
		//'id_registro',
		//'nb_bd_usuario',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); 
?>

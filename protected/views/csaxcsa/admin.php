<?php
$this->breadcrumbs=array(
	'Csaxcsas'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Csaxcsa','url'=>array('index')),
	array('label'=>'Create Csaxcsa','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'tabs',
	'tabs' => array(
			array('label'=>'Listar ','url'=>array('/usuario/index')),
			array('label'=>'Registrar','url'=>array('create')),
			))
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('csaxcsa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Vectores</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'csaxcsa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_csaxcsa',
		'nb_jefe_familia',
		'ci_jefe_familia',
		'nacio_jefe_familia',
		'perso_beneficiadas',
		'tlf_csaxcsa',
		/*
		'charla_csaxcsa',
		'viviend_fumigada',
		'viviend_abatizada',
		'dep_encontrados',
		'focos_positivos',
		'focos_eliminados',
		'nu_casos_dengue',
		'cant_litros_abate',
		'grs_abatizacion',
		'id_registro',
		'id_atencion',
		'id_abatizacion',
		'nb_bd_usuario',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

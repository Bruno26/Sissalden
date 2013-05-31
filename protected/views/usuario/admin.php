<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Consultar',
);
/*
$this->menu=array(
	array('label'=>'List Usuario','url'=>array('index')),
	array('label'=>'Create Usuario','url'=>array('create')),
);
*/
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Listar Usuario','url'=>array('index')),
	array('label'=>'Crear Usuario','url'=>array('create')),
	),
));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('usuario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Usuarios</h1>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nb_usuario',
		'nu_cedula_usuario',
		'nacio_usuario',
		'nb_bd_usuario',
		//'id_registro',
		'st_usuario',
		
		'in_tipo_usuario',
		/*'nu_telefono',
		'password',
		'last_login',
		'create_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

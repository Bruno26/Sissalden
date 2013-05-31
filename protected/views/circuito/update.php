<?php
/* @var $this CircuitoController */
/* @var $model Circuito */

$this->breadcrumbs=array(
	'Circuitos'=>array('index'),
	$model->id_circuito=>array('view','id'=>$model->id_circuito),
	'Update',
);

$this->menu=array(
	array('label'=>'List Circuito', 'url'=>array('index')),
	array('label'=>'Create Circuito', 'url'=>array('create')),
	array('label'=>'View Circuito', 'url'=>array('view', 'id'=>$model->id_circuito)),
	array('label'=>'Manage Circuito', 'url'=>array('admin')),
);
?>

<h1>Update Circuito <?php echo $model->id_circuito; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
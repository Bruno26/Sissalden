<?php
/* @var $this CircuitoController */
/* @var $model Circuito */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_circuito'); ?>
		<?php echo $form->textField($model,'id_circuito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_circuito'); ?>
		<?php echo $form->textField($model,'nb_circuito',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'asic-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'id_circuito', CHtml::listData(Circuito::model()->findAll(), 'id_circuito', 'nb_circuito'));//linea que?>

	<?php echo $form->dropDownListRow($model,'id_parroquia', CHtml::listData(Parroquia::model()->findAll(), 'id_parroquia', 'nb_parroquia'));//linea que?>

	<?php echo $form->textFieldRow($model,'nb_asic',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

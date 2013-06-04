<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sub-actividades-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<?php echo $form->dropDownListRow($model,'id_actividades', CHtml::listData(Actividades::model()->findAll(), 'id_actividades', 'nb_actividades'));?>

	<?php echo $form->textFieldRow($model,'nb_sub_actividades',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Regsitrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

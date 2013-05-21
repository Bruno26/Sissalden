<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'asic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nb_asic',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'id_parroquia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'id_circuito',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

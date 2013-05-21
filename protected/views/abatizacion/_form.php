<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'abatizacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'cant_litros_abate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'grs_abatizacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

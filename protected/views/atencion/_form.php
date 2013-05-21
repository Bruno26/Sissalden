<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'atencion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'st_atencion',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textAreaRow($model,'dir_casaxcsa',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'id_informe',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

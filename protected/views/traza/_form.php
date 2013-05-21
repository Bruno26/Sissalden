<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'traza-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'ip_traza',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'in_tipo_movimiento_traza',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'nb_tabla_traza',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'id_registro_traza',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fe_hr_traza',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nb_esquema',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

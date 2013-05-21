<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nb_usuario',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'nu_cedula_usuario',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'nacio_usuario',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'id_registro',array('class'=>'span5')); ?>

	<?php echo $form->checkBoxRow($model,'st_usuario'); ?>

	<?php echo $form->textFieldRow($model,'in_tipo_usuario',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'nu_telefono',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'parroquia-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<?php echo $form->dropDownListRow($model,'id_circuito', CHtml::listData(Circuito::model()->findAll(), 'id_circuito', 'nb_circuito'));//linea que ve el nombre de circuito de la tabla Circuito ?>	
	
	<?php echo $form->textFieldRow($model,'nb_parroquia',array('class'=>'span2','maxlength'=>50)); ?>
	
	<?php //echo $form->textFieldRow($model,'id_circuito',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

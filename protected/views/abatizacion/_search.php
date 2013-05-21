<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_abatizacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cant_litros_abate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'grs_abatizacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

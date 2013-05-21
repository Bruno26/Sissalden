<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_acta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tma_acta',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nb_actividades',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nb_sub_actividades',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'fch_acta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cant_participantes',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'id_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_consul_popular',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_asic',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_parroquia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_circuito',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_actividades',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_promotor',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

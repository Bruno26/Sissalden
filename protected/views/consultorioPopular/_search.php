<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_consul_popular',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_consul_popular',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textAreaRow($model,'dir_consu_popular',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'nb_comite_salud',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'telf_comite_salud',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_coordi_comite_salud',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'id_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_asic',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_parroquia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_circuito',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_promotor',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_promotor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ape_promotor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ci_promotor',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'tlf_promotor',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'dir_promotor',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'sexo_promotor',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'nacio_promotor',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textAreaRow($model,'grado_academico_promoto',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status_promotor',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'id_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

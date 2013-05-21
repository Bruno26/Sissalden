<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_csaxcsa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_jefe_familia',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ci_jefe_familia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nacio_jefe_familia',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'perso_beneficiadas',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tlf_csaxcsa',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->checkBoxRow($model,'charla_csaxcsa'); ?>

	<?php echo $form->checkBoxRow($model,'viviend_fumigada'); ?>

	<?php echo $form->checkBoxRow($model,'viviend_abatizada'); ?>

	<?php echo $form->textFieldRow($model,'dep_encontrados',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'focos_positivos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'focos_eliminados',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_casos_dengue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cant_litros_abate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'grs_abatizacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_registro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_atencion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_abatizacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

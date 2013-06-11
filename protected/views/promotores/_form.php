<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'promotores-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,

)); ?>

	<p class="help-block"><span class="required">(*)</span> Campos Requeridos.</p>


<div >
	<?php //echo $form->errorSummary($model); ?><br>

	<?php echo $form->textFieldRow($model,'nb_promotor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'ape_promotor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->dropDownListRow($model,'nacio_promotor',array(''=>'Seleccione...','V'=> 'Venezolano','E'=> 'Extranjero')); ?>

	<?php echo $form->textFieldRow($model,'ci_promotor',array('class'=>'span5','maxlength'=>8)); ?>
	
<!--	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'ci_promotor'); ?></label>	
		<div class="controls">	
		<?php $this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'ci_promotor',
			'mask' => '99999999',
			'htmlOptions' => array('size' => 8)
			));
		?><br>

		<?php echo $form->error($model,'ci_promotor'); ?>
		</div>
	</div>-->

	<?php echo $form->textFieldRow($model,'tlf_promotor',array('class'=>'span5')); ?>
	
<!--	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'tlf_promotor'); ?></label>	
		<div class="controls">	
		<?php $this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'tlf_promotor',
			'mask' => '99999999999',
			'htmlOptions' => array('size' => 11)
			));
		?><br>

		<?php echo $form->error($model,'tlf_promotor'); ?>
		</div>
	</div>-->
	<?php echo $form->textAreaRow($model,'dir_promotor',array('rows'=>4, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'sexo_promotor',array(''=>'Seleccione...','M'=> 'Masculino','F'=> 'Femenino')); ?>

	<?php echo $form->dropDownListRow($model,'grado_academico_promoto',array(''=>'Seleccione...','No Aplica'=> 'No Aplica','Analfabeta'=> 'Analfabeta','Primaria'=>'Primaria oAlfabeta','Secundaria'=> 'Secundaria','TSU'=> 'TSU','Universitario'=> 'Universitario','Otro'=>'Otro')); ?>		

	<?php echo $form->dropDownListRow($model,'status_promotor',array(''=>'Seleccione...','A'=> 'Activo','D'=> 'Inactivo')); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>
	
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

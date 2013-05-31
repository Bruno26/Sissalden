<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'consultorio-promotores-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requiridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'id_circuito' ,CHtml::listData(Circuito::model()->findAll(), 'id_circuito', 'nb_circuito')); ?>

	<?php echo $form->dropDownListRow($model,'id_circuito' ,CHtml::listData(Parroquia::model()->findAll(), 'id_parroquia', 'nb_parroquia')); ?>

	<?php echo $form->dropDownListRow($model,'id_asic',CHtml::listData(Asic::model()->findAll(), 'id_asic', 'nb_asic')); ?>

	<?php echo $form->dropDownListRow($model,'id_consul_popular',CHtml::listData(ConsultorioPopular::model()->findAll(), 'id_consul_popular', 'nb_consul_popular')); ?>

	<?php echo $form->dropDownListRow($model,'id_promotor',CHtml::listData(Promotores::model()->findAll(), 'id_promotor', 'nb_promotor')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Asignar' : 'Asignar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

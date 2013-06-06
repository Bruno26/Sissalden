<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'asic-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<div class="control-group "><!-- Inicio de combo circuto-->

		<label class="control-label"> <?php echo $form->labelEx($model,'id_circuito'); ?></label>
		<div class="controls">		
		<?php echo $form->dropDownList($model,'id_circuito',
                   CHtml::listData(Circuito::model()->findAll(),'id_circuito','nb_circuito'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('Asic/SelectParroquia'),
                              'update'=>'#'.CHtml::activeId($model,'id_parroquia'),
                              'beforeSend' => 'function(){
                               $("#Asic_id_parroquia").find("option").remove();

                               }',  
                            ),'prompt'=>'Seleccione un circuito'
                            
                            
                        )
                        ); ?><br>
		<?php echo $form->error($model,'id_circuito'); ?>
		</div>
	</div> <!-- Fin de combo circuto-->

	
	<div class="control-group"> <!-- Inicio de combo parroquia dependiento de circuto-->
		<label class="control-label"><?php echo $form->labelEx($model,'id_parroquia'); ?></label>
		<div class="controls">		
		<?php 
                $lista_tres = array();
                if(isset($model->id_parroquia)){
                $id_circuito = intval($model->id_circuito); 
                $lista_tres = CHtml::listData(Parroquia::model()->findAll("id_circuito = '$id_circuito'"),'id_parroquia','nb_parroquia');
                }
                echo $form->dropDownList($model,'id_parroquia',$lista_tres,
                        array('prompt'=>'Seleccione una parroquia')
                        ); ?><br>
		<?php echo $form->error($model,'id_parroquia'); ?>
		</div>
	</div>  <!-- Inicio de combo parroquia dependiento de circuto-->

	
	<?php //echo $form->dropDownListRow($model,'id_circuito', CHtml::listData(Circuito::model()->findAll(), 'id_circuito', 'nb_circuito'));?>

	<?php //echo $form->dropDownListRow($model,'id_parroquia', CHtml::listData(Parroquia::model()->findAll(), 'id_parroquia', 'nb_parroquia'));?>

	<?php echo $form->textFieldRow($model,'nb_asic',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

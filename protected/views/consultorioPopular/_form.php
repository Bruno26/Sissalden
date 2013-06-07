<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'consultorio-popular-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<?php //echo $form->textFieldRow($model,'id_circuito',array('class'=>'span5')); ?>

	<div class="control-group "><!-- Inicio de combo circuto-->

		<label class="control-label"> <?php echo $form->labelEx($model,'id_circuito'); ?></label>
		<div class="controls">		
		<?php echo $form->dropDownList($model,'id_circuito',
                   CHtml::listData(Circuito::model()->findAll(),'id_circuito','nb_circuito'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('ConsultorioPopular/SelectParroquia'),
                              'update'=>'#'.CHtml::activeId($model,'id_parroquia'),
                              'beforeSend' => 'function(){
                               $("#ConsultorioPopular_id_parroquia").find("option").remove();

                               }',  
                            ),'prompt'=>'Seleccione un circuito'
                            
                            
                        )
                        ); ?><br>
		<?php echo $form->error($model,'id_circuito'); ?>
		</div>
	</div> <!-- Fin de combo circuto-->

	<?php //echo $form->textFieldRow($model,'id_parroquia',array('class'=>'span5')); ?>
	
	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'id_parroquia'); ?></label>
		<div class="controls">	
		<?php 
                $lista_dos = array();
                if(isset($model->id_parroquia)){
                $id_circuito = intval($model->id_circuito); 
                $lista_dos = CHtml::listData(Parroquia::model()->findAll("id_circuito = '$id_circuito'"),'id_parroquia','nb_parroquia');
                }                
                echo $form->dropDownList($model,'id_parroquia',$lista_dos,
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('ConsultorioPopular/Selectasic'),
                              'update'=>'#'.CHtml::activeId($model,'id_asic'),
                              'beforeSend' => 'function(){
                              $("#ConsultorioPopular_id_asic").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Seleccione  ')
                        ); ?><br>
            
            
		<?php echo $form->error($model,'id_parroquia'); ?>
		</div>		
	</div>

	<?php //echo $form->textFieldRow($model,'id_asic',array('class'=>'span5')); ?>

	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'id_asic'); ?></label>
		<div class="controls">			
		<?php 
                $lista_tres = array();
                if(isset($model->id_asic)){
                $id_parroquia = intval($model->id_parroquia); 
                $lista_tres = CHtml::listData(Asic::model()->findAll("id_parroquia = '$id_parroquia'"),'id_asic','nb_asic');
                }
                echo $form->dropDownList($model,'id_asic',$lista_tres,
                        array('prompt'=>'Seleccione')
                        ); ?><br>

		<?php echo $form->error($model,'id_asic'); ?>
		</div>		
	</div>

	<?php echo $form->textFieldRow($model,'nb_consul_popular',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textAreaRow($model,'dir_consu_popular',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nb_comite_salud',array('class'=>'span5','maxlength'=>50)); ?>

	<?php //echo $form->textFieldRow($model,'telf_comite_salud',array('class'=>'span5')); ?>

	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'telf_comite_salud'); ?></label>	
		<div class="controls">	
		<?php $this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'telf_comite_salud',
			'mask' => '99999999999',
			'htmlOptions' => array('size' => 11)
			));
		?><br>

		<?php echo $form->error($model,'telf_comite_salud'); ?>
		</div>
	</div>
	
	<?php echo $form->textFieldRow($model,'nb_coordi_comite_salud',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nb_bd_usuario',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrar' : 'Registrar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

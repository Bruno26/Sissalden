<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'consultorio-promotores-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requiridos.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<?php //echo $form->dropDownListRow($model,'id_circuito' ,CHtml::listData(Circuito::model()->findAll(), 'id_circuito', 'nb_circuito')); ?>

	<div class="control-group "><!-- Inicio de combo circuto-->

		<label class="control-label"> <?php echo $form->labelEx($model,'id_circuito'); ?></label>
		<div class="controls">		
		<?php echo $form->dropDownList($model,'id_circuito',
                   CHtml::listData(Circuito::model()->findAll(),'id_circuito','nb_circuito'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('ConsultorioPromotores/SelectParroquia'),
                              'update'=>'#'.CHtml::activeId($model,'id_parroquia'),
                              'beforeSend' => 'function(){
                               $("#ConsultorioPromotores_id_parroquia").find("option").remove();

                               }',  
                            ),'prompt'=>'Seleccione un circuito'
                            
                            
                        )
                        ); ?><br>
		<?php echo $form->error($model,'id_circuito'); ?>
		</div>
	</div> <!-- Fin de combo circuto-->

	<?php //echo $form->dropDownListRow($model,'id_parroquia' ,CHtml::listData(Parroquia::model()->findAll(), 'id_parroquia', 'nb_parroquia')); ?>

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
                              'url'=>CController::createUrl('ConsultorioPromotores/Selectasic'),
                              'update'=>'#'.CHtml::activeId($model,'id_asic'),
                              'beforeSend' => 'function(){
                              $("#ConsultorioPromotores_id_asic").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Seleccione parroquia ')
                        ); ?><br>
            
            
		<?php echo $form->error($model,'id_parroquia'); ?>
		</div>		
	</div> <!-- Fin de combo parroquia-->

	<?php //echo $form->dropDownListRow($model,'id_asic',CHtml::listData(Asic::model()->findAll(), 'id_asic', 'nb_asic')); ?>

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
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('ConsultorioPromotores/SelectConsultorio'),
                              'update'=>'#'.CHtml::activeId($model,'id_consul_popular'),
                              'beforeSend' => 'function(){
                              $("#ConsultorioPromotores_id_consul_popular").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Seleccione Asic ')
                        ); ?><br>
            
            
		<?php echo $form->error($model,'id_parroquia'); ?>
		</div>		
	</div> <!-- Fin de combo asic-->

	<?php //echo $form->dropDownListRow($model,'id_consul_popular',CHtml::listData(ConsultorioPopular::model()->findAll(), 'id_consul_popular', 'nb_consul_popular')); ?>

	<div class="control-group ">
		<label class="control-label"><?php echo $form->labelEx($model,'id_consul_popular'); ?></label>
		<div class="controls">			
		<?php 
                $lista_cuatro = array();
                if(isset($model->id_consul_popular)){
                $id_asic = intval($model->id_asic); 
                $lista_cuatro = CHtml::listData(ConsultorioPopular::model()->findAll("id_asic = '$id_asic'"),'id_consul_popular','nb_cunsul_popular');
                }
                echo $form->dropDownList($model,'id_consul_popular',$lista_cuatro,
                        array('prompt'=>'Seleccione Consultorio')
                        ); ?><br>

		<?php echo $form->error($model,'id_consul_popular'); ?>
		</div>		
	</div> <!-- Fin de combo consultorio-->


	<?php echo $form->dropDownListRow($model,'id_promotor',CHtml::listData(Promotores::model()->findAll(), 'id_promotor', 'nb_promotor')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Asignar' : 'Asignar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'asic-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php //echo $form->errorSummary($model); ?><br><br>

	<div class="row" aling='center'>

	<?php echo $form->labelEx($model, 'Circuito');//nombre de la etiquetaq a mostrar
	
	$busqueda = new CDbCriteria;//parametro de busqueda 

	$busqueda -> order = 'nb_circuito ASC';// rodenar alfabetiacamente
		echo $form->dropDownList($model,'id_circuito', CHtml::listData(Circuito::model()->findAll($busqueda), 'id_circuito', 'nb_circuito'),
		array('ajax' => array('type' => 'POST','url' => AsicController::createUrl('Correspondencia/cargarparroquia'),//
			'update' => '#Correspondencia_id_parroquia'
		// el div que se va a actualizar
		),'prompt' => 'Seleccione Circuito'
			// Valor por defecto
			)
		);
		echo $form->error($model,'id_circuitio');
		?>
	</div>

	<div class="row"><!--segundo div parroquia -->
		<?php echo $form->labelEx($model,'Parroquia');
			if ($model->isNewRecord==1)
			//Si se está creando un registro nuevo
			{
			echo $form->dropDownList($model,'id_parroquia',array('0' => 'Seleccione una Parroquia'));
			// se muestra solo Seleccione un Organismo
			}
			else {
			$tipo=$model->id_circuito;
			// Si se está modificando un registro
			$sql="select count(id_parroquia) from parroquia where id_circuito='$tipo';";
			//
			$connection=Yii::app()->db;
			//
			$command=$connection->createCommand($sql);
			//
			$row=$command->queryRow();
			//
			$bandera=$row['count'];
			//
			if ($bandera==0) {
			//
			echo $form->dropDownList($model,'id_parroquia',
			array('0' => 'Seleccione una Parroquia')); }
			// Si el tipo de organismo no tiene ningún 
			else {
			// organismo solo muestra Seleccione un Organismo
			echo $form->dropDownList($model,'id_parroquia',
			 CHtml::listData(Parroquia::model()->findAllBySql(
			//Aquí van los datos de la búsqueda del segundo combo
			"select * from parroquia where id_circuito
			 =:keyword order by id_parroquia=:clave2 asc",
			array(':keyword'=>$model->id_circuito,':clave2'=>$model->id_parroquia)),
			'id_parroquia','nb_parroquia'));
			}
			}
			?>

</div>



	
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

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Acta')); ?>:</b>
	<?php echo CHtml::encode(($data->tipo_acta->nb_actividades));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_sub_actividades')); ?>:</b>
	<?php echo CHtml::encode($data->nb_sub_actividades); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_sub_actividades')); ?>
	<?php //echo CHtml::link(CHtml::encode($data->id_sub_actividades),array('view','id'=>$data->id_sub_actividades)); ?>



	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>
	<?php //echo CHtml::encode($data->id_registro); ?>


	<b><?php //echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>
	<?php //echo CHtml::encode($data->nb_bd_usuario); ?>



</div>

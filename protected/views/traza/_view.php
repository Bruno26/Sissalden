<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_traza')); ?>:</b>
	<?php echo CHtml::encode($data->ip_traza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_tipo_movimiento_traza')); ?>:</b>
	<?php echo CHtml::encode($data->in_tipo_movimiento_traza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_tabla_traza')); ?>:</b>
	<?php echo CHtml::encode($data->nb_tabla_traza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro_traza')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro_traza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_hr_traza')); ?>:</b>
	<?php echo CHtml::encode($data->fe_hr_traza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_esquema')); ?>:</b>
	<?php echo CHtml::encode($data->nb_esquema); ?>
	<br />

	*/ ?>

</div>
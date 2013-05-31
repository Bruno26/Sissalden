<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_bd_usuario),array('view','id'=>$data->nb_bd_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cedula_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cedula_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacio_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nacio_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->st_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_tipo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->in_tipo_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->nu_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	*/ ?>

</div>
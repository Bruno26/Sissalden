<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sub_actividades')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sub_actividades),array('view','id'=>$data->id_sub_actividades)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_sub_actividades')); ?>:</b>
	<?php echo CHtml::encode($data->nb_sub_actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_actividades')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />


</div>
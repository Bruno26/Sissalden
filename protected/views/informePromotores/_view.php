<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe_promotor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informe_promotor),array('view','id'=>$data->id_informe_promotor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->id_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />


</div>
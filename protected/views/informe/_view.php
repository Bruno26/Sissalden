<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Array')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fch_informe')); ?>:</b>
	<?php echo CHtml::encode($data->fch_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fch_sub_informe')); ?>:</b>
	<?php echo CHtml::encode($data->fch_sub_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consul_popular')); ?>:</b>
	<?php echo CHtml::encode($data->id_consul_popular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_asic')); ?>:</b>
	<?php echo CHtml::encode($data->id_asic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->id_parroquia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_circuito')); ?>:</b>
	<?php echo CHtml::encode($data->id_circuito); ?>
	<br />

	*/ ?>

</div>
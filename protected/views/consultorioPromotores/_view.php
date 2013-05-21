<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consultorio_promotorer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_consultorio_promotorer),array('view','id'=>$data->id_consultorio_promotorer)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_circuito')); ?>:</b>
	<?php echo CHtml::encode($data->id_circuito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->id_promotor); ?>
	<br />


</div>
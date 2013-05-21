<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Array')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_atencion')); ?>:</b>
	<?php echo CHtml::encode($data->st_atencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_casaxcsa')); ?>:</b>
	<?php echo CHtml::encode($data->dir_casaxcsa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_informe); ?>
	<br />


</div>
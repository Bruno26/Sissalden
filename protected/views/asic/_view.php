<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Array')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_asic')); ?>:</b>
	<?php echo CHtml::encode($data->nb_asic); ?>
	<br />

	<b><?php// echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php //echo CHtml::encode($data->id_registro); ?>
	<br />


</div>

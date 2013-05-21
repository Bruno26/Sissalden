<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Array')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->nb_parroquia); ?>
	<br />


</div>
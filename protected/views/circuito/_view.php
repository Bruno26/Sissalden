<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_circuito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_circuito),array('view','id'=>$data->id_circuito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_circuito')); ?>:</b>
	<?php echo CHtml::encode($data->nb_circuito); ?>
	<br />


</div>
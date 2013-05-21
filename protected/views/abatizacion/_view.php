<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_abatizacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_abatizacion),array('view','id'=>$data->id_abatizacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_litros_abate')); ?>:</b>
	<?php echo CHtml::encode($data->cant_litros_abate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grs_abatizacion')); ?>:</b>
	<?php echo CHtml::encode($data->grs_abatizacion); ?>
	<br />


</div>
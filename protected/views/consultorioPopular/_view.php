<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Array')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_consul_popular')); ?>:</b>
	<?php echo CHtml::encode($data->nb_consul_popular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_consu_popular')); ?>:</b>
	<?php echo CHtml::encode($data->dir_consu_popular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_comite_salud')); ?>:</b>
	<?php echo CHtml::encode($data->nb_comite_salud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telf_comite_salud')); ?>:</b>
	<?php echo CHtml::encode($data->telf_comite_salud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_coordi_comite_salud')); ?>:</b>
	<?php echo CHtml::encode($data->nb_coordi_comite_salud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />

	*/ ?>

</div>
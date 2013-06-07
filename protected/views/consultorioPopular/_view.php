<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('Array')); ?>
	<?php //echo CHtml::link(CHtml::encode($data->Array),array('view','id'=>$data->Array)); ?>


	<?php //echo CHtml::encode($data->getAttributeLabel('nb_consul_popular')); ?>
	<?php //echo CHtml::encode($data->nb_consul_popular); ?>


	<b><?php echo CHtml::encode($data->getAttributeLabel('Consultorio Popular')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_consul_popular ),array('view','id_consul_popular'=>$data->id_consul_popular, 'id_asic'=>$data->id_asic ,'id_parroquia'=>$data->id_parroquia, 'id_circuito'=>$data->id_circuito)); ?></b>
	</br>

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

	<?php //echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>
	<?php //echo CHtml::encode($data->id_registro); ?>


	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />

	*/ ?>

</div>

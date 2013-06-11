<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promotor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->promotores->nb_promotor),array('view','id'=>$data->id_consultorio_promotorer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_circuito')); ?>:</b>
	<?php echo CHtml::encode($data->circuito->nb_circuito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->parroquia->nb_parroquia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_asic')); ?>:</b>
	<?php echo CHtml::encode($data->asic->nb_asic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Consultorio')); //label de index?>:</b>
	<?php echo CHtml::encode(($data->consultorio->nb_consul_popular));//Campo tomado del a relacion establecida en el modelo Parroquia ?>
	<br />



</div>

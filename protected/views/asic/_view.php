<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Circuito')); ?>:</b>
	<?php echo CHtml::encode(($data->circuito->nb_circuito));//Campo tomado del a relacion establecida en el modelo Parroquia ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Parroquia')); //label de index?>:</b>
	   <?php echo CHtml::encode(($data->parroquia->nb_parroquia));//Campo tomado del a relacion establecida en el modelo Parroquia ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_asic')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_asic ),array('view','id_asic'=>$data->id_asic , 'id_circuito'=>$data->id_circuito, 'id_parroquia'=>$data->id_parroquia)); ?>
	<br />

	<?php //echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>
	<?php //echo CHtml::encode($data->id_registro); ?>
	


</div>

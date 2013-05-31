<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre Circuito')); //label de index?>:</b>
	   <?php echo CHtml::encode(($data->circuito->nb_circuito));//Campo tomado del a relacion establecida en el modelo Parroquia ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parroquia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_parroquia ),array('view','id_parroquia'=>$data->id_parroquia , 'id_circuito'=>$data->id_circuito)); ?>
	<br />


</div>

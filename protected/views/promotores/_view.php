<div class="view">

<!----------------link de pk promotor y linea de promotor
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promotor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_promotor),array('view','id'=>$data->id_promotor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->nb_promotor); ?>
	<br />

-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_promotor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_promotor),array('view','id'=>$data->id_promotor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ape_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->ape_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->ci_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tlf_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->tlf_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->dir_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->sexo_promotor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nacio_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->nacio_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado_academico_promoto')); ?>:</b>
	<?php echo CHtml::encode($data->grado_academico_promoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_promotor')); ?>:</b>
	<?php echo CHtml::encode($data->status_promotor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_bd_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nb_bd_usuario); ?>
	<br />

	*/ ?>

</div>

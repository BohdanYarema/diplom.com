<?php
/* @var $this BuyStepController */
/* @var $data BuyStep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_b')); ?>:</b>
	<?php echo CHtml::encode($data->data_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_e')); ?>:</b>
	<?php echo CHtml::encode($data->data_e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commnet')); ?>:</b>
	<?php echo CHtml::encode($data->commnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buy_id')); ?>:</b>
	<?php echo CHtml::encode($data->buy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('step_id')); ?>:</b>
	<?php echo CHtml::encode($data->step_id); ?>
	<br />


</div>
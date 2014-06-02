<?php
/* @var $this BuyController */
/* @var $data Buy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Код перегляду')); ?> : </b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Номер замовлення')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Опис')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Дата')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Код користувача')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>
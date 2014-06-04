<?php
/* @var $this BuyGoodsController */
/* @var $data BuyGoods */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buy_id')); ?>:</b>
	<?php echo CHtml::encode($data->buy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc')); ?>:</b>
	<?php echo CHtml::encode($data->calc); ?>
	<br />


</div>
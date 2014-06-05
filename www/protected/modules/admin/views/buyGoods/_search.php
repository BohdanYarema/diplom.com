<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buy_id'); ?>
		<?php echo $form->textField($model,'buy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc'); ?>
		<?php echo $form->textField($model,'calc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Пошук'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
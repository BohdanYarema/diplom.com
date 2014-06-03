<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buy-goods-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля з <span class="required">*</span> обов'язкові.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'buy_id'); ?>
		<?php echo $form->textField($model,'buy_id'); ?>
		<?php echo $form->error($model,'buy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
		<?php echo $form->error($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc'); ?>
		<?php echo $form->textField($model,'calc'); ?>
		<?php echo $form->error($model,'calc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'створити' : 'зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
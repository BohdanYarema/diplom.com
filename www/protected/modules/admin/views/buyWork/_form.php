<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buy-work-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'buy_id'); ?>
		<?php echo $form->textField($model,'buy_id'); ?>
		<?php echo $form->error($model,'buy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_id'); ?>
		<?php echo $form->textField($model,'work_id'); ?>
		<?php echo $form->error($model,'work_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc'); ?>
		<?php echo $form->textField($model,'calc'); ?>
		<?php echo $form->error($model,'calc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
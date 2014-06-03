<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buy-step-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля з <span class="required">*</span> обов'язкові.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data_b'); ?>
		<?php echo $form->textField($model,'data_b'); ?>
		<?php echo $form->error($model,'data_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_e'); ?>
		<?php echo $form->textField($model,'data_e'); ?>
		<?php echo $form->error($model,'data_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commnet'); ?>
		<?php echo $form->textField($model,'commnet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'commnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buy_id'); ?>
		<?php echo $form->textField($model,'buy_id'); ?>
		<?php echo $form->error($model,'buy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'step_id'); ?>
		<?php echo $form->textField($model,'step_id'); ?>
		<?php echo $form->error($model,'step_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
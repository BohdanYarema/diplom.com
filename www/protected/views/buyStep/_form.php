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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data_b_f'); ?>
		<?php echo $form->textField($model,'data_b_f'); ?>
		<?php echo $form->error($model,'data_b_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_e_f'); ?>
		<?php echo $form->textField($model,'data_e_f'); ?>
		<?php echo $form->error($model,'data_e_f'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'data_b_p'); ?>
		<?php echo $form->textField($model,'data_b_p'); ?>
		<?php echo $form->error($model,'data_b_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_e_p'); ?>
		<?php echo $form->textField($model,'data_e_p'); ?>
		<?php echo $form->error($model,'data_e_p'); ?>
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
		<?php echo $form->dropDownList($Step,'step_id',Step::all()); ?>
		<?php echo $form->error($model,'step_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
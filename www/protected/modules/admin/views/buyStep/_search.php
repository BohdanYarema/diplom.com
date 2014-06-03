<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */
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
		<?php echo $form->label($model,'data_b'); ?>
		<?php echo $form->textField($model,'data_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_e'); ?>
		<?php echo $form->textField($model,'data_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commnet'); ?>
		<?php echo $form->textField($model,'commnet',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buy_id'); ?>
		<?php echo $form->textField($model,'buy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'step_id'); ?>
		<?php echo $form->textField($model,'step_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Пошук'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
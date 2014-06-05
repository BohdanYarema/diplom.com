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

	<p class="note">Поля з <span class="required">*</span> обов'язкові.</p>

	<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary(array($BuyWork,$Buy)); ?>
 
        <!-- ...input fields for $a, $b... -->
        <div class="row">
            <?php echo $form->labelEx($BuyWork,'work_id'); ?>
            <?php echo $form->dropDownList($BuyWork,'work_id',Work::all()); ?>
            <?php echo $form->error($BuyWork,'work_id'); ?>
        </div>
     
        <div class="row">
            <?php echo $form->labelEx($BuyWork,'calc'); ?>
            <?php echo $form->textField($BuyWork,'calc'); ?>
            <?php echo $form->error($BuyWork,'calc'); ?>
        </div>
     
        <div class="row">
            <?php echo $form->labelEx($Buy,'text'); ?>
            <?php echo $form->textField($Buy,'text'); ?>
            <?php echo $form->error($Buy,'text'); ?>
        </div>

    	<div class="row buttons">
    		<?php echo CHtml::submitButton($model->isNewRecord ? 'створити' : 'зберегти'); ?>
    	</div>
     <?php echo CHtml::endForm(); ?>

<?php $this->endWidget(); ?>
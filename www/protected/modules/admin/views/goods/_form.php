<?php
/* @var $this GoodsController */
/* @var $model Goods */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article'); ?>
		<?php echo $form->textField($model,'article',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'article'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array( 
        'model'=>$model, 
        'attribute'=>'text', 
        'language'=>'ru', 
        'editorTemplate'=>'full', )); 
        ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay'); ?>
		<?php echo $form->textField($model,'pay'); ?>
		<?php echo $form->error($model,'pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status', array(0=>"нема в наявності", 1=>"є в наявності")); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
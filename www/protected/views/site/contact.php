<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

?>

<h1>Контактна форма</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Якщо у вас є до нас питання, зв'яжіться з нами за допомогою цієї форми. Дякуємо.
</p>

<div class="form">

        <?php /** @var BootActiveForm $form */
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
                ),
            'htmlOptions'=>array('class'=>'well'),
        )); ?>
        
        
        <p class="note">Поля з <span class="required">*</span> обов'язкові.</p>
        
        <?php echo $form->errorSummary($model); ?>
            
        <?php echo $form->textFieldRow($model, 'name', array('class'=>'span3')); ?>
        <?php echo $form->textFieldRow($model, 'email', array('class'=>'span3')); ?>
        <?php echo $form->textAreaRow($model, 'body', array('class'=>'span8', 'rows'=>5)); ?>
                
    	<?php if(CCaptcha::checkRequirements()): ?>
    	<div class="row">
    		<?php echo $form->labelEx($model,'verifyCode'); ?>
    		<div>
    		<?php $this->widget('CCaptcha'); ?>
    		<?php echo $form->textField($model,'verifyCode'); ?>
    		</div>
    		<div class="hint">Будь-ласка введіть літери які ви бачите на картинці.
    		<br/>Літери не чутливі до регістру.</div>
    		<?php echo $form->error($model,'verifyCode'); ?>
    	</div>
    	<?php endif; ?>

        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Відправити')); ?>

        <?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
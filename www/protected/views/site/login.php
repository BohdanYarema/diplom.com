<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Уввікмніть</h1>

<p>Будь-ласка заповніть потрібні поля</p>

<div class="form">

	<p class="note">Поля з <span class="required">*</span> Обов'язкові</p>

        <?php /** @var BootActiveForm $form */
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array('class'=>'well'),
        )); ?>
         
        <?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
        <?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
        <?php echo $form->checkboxRow($model, 'rememberMe'); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
        
        <?php $this->endWidget(); ?>

</div><!-- form -->

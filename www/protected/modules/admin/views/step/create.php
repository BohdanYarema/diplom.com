<?php
/* @var $this StepController */
/* @var $model Step */



$this->menu=array(
	array('label'=>'Журнал етапів', 'url'=>array('index')),
);
?>

<h1>Додати новий </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
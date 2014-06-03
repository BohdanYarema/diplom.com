<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */


$this->menu=array(
	array('label'=>'Журнал замовлень на послуги', 'url'=>array('index')),
);
?>

<h1>Створити замовлення</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
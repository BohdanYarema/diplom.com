<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */

$this->menu=array(
	array('label'=>'Журнал виконання замовлень', 'url'=>array('index')),
);
?>

<h1>Додати новий</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
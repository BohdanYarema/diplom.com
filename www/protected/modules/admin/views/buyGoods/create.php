<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */

$this->menu=array(
	array('label'=>'Журнал замовлень товарів', 'url'=>array('index')),
);
?>

<h1>Додати замовлення</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */

$this->menu=array(
	array('label'=>'Журнал замовлень товарів', 'url'=>array('index')),
);
?>

<h1>Додати замовлення</h1>

<?php echo $this->renderPartial('_form', array('BuyGoods'=>$BuyGoods, 'Buy'=>$Buy)); ?>
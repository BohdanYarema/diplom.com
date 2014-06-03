<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */


$this->menu=array(
	array('label'=>'Журнал замовлень на товар', 'url'=>array('index')),
	array('label'=>'Додати нове', 'url'=>array('create')),
	array('label'=>'Перегляд замовлення', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити замовлення <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
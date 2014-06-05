<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */

$this->menu=array(
	array('label'=>'Журнал замовлень', 'url'=>array('index')),
	array('label'=>'Перегляд замовлень', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Змінити замовлення <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
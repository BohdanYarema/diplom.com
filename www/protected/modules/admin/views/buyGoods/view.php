<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */


$this->menu=array(
	array('label'=>'Журнал замовлень на товар', 'url'=>array('index')),
	array('label'=>'Додате нове', 'url'=>array('create')),
	array('label'=>'Оновити замовлення', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити замовлення', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені в цьому?')),
);
?>

<h1>Перегляд замовлення #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'goods_id',
		'calc',
	),
)); ?>

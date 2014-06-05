<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */


$this->menu=array(
	array('label'=>'List BuyGoods', 'url'=>array('index')),
	array('label'=>'Update BuyGoods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BuyGoods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Перегляд товару #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'goods_id',
		'calc',
	),
)); ?>

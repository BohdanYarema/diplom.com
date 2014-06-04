<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */

$this->breadcrumbs=array(
	'Buy Goods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BuyGoods', 'url'=>array('index')),
	array('label'=>'Create BuyGoods', 'url'=>array('create')),
	array('label'=>'Update BuyGoods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BuyGoods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BuyGoods', 'url'=>array('admin')),
);
?>

<h1>View BuyGoods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'goods_id',
		'calc',
	),
)); ?>

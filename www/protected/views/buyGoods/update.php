<?php
/* @var $this BuyGoodsController */
/* @var $model BuyGoods */

$this->breadcrumbs=array(
	'Buy Goods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BuyGoods', 'url'=>array('index')),
	array('label'=>'Create BuyGoods', 'url'=>array('create')),
	array('label'=>'View BuyGoods', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BuyGoods', 'url'=>array('admin')),
);
?>

<h1>Update BuyGoods <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
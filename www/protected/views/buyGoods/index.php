<?php
/* @var $this BuyGoodsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buy Goods',
);

$this->menu=array(
	array('label'=>'Create BuyGoods', 'url'=>array('create')),
	array('label'=>'Manage BuyGoods', 'url'=>array('admin')),
);
?>

<h1>Buy Goods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

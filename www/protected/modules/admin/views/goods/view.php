<?php
/* @var $this GoodsController */
/* @var $model Goods */


$this->menu=array(
	array('label'=>'Каталог товарів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Оновити товар', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити товар', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені?')),
);
?>

<h1>Перегляд товару #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'article',
		'text',
		'data',
		'pay',
		'status',
	),
)); ?>

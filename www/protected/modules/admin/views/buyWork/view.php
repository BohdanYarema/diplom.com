<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */


$this->menu=array(
	array('label'=>'Журнал замовлень послуг', 'url'=>array('index')),
	array('label'=>'Оновлення замовлення', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити замовлення', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Перегляд замоклення #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'work_id',
		'calc',
	),
)); ?>

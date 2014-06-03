<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */


$this->menu=array(
	array('label'=>'Журнал замовлень на послуги', 'url'=>array('index')),
	array('label'=>'Створити замовлення', 'url'=>array('create')),
	array('label'=>'Оновити замовлення', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BuyWork', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені в собі?')),
);
?>

<h1>Перегляд замовлення #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'work_id',
		'calc',
	),
)); ?>

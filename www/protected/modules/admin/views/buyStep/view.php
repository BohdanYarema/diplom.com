<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */


$this->menu=array(
	array('label'=>'Журнал виконання замовлень', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Оновити перегляд', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити перегляд', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені в собі?')),
);
?>

<h1>Перегляд виконання #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_b',
		'data_e',
		'commnet',
		'buy_id',
		'step_id',
	),
)); ?>

<?php
/* @var $this BuyController */
/* @var $model Buy */


$this->menu=array(
	//array('label'=>'Список замовлень', 'url'=>array('buy/select', 'id'=>$model->id)),
        array('label'=>'Стан виконання замовлення', 'url'=>array('buystep/select', 'id'=>$model->id)),
);
?>  

<h1>Перегляд замовлення № <?php echo $model->number; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'number',
		'text',
		'data',
		'user_id',
	),
)); ?>

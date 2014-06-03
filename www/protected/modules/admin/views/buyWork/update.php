<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */


$this->menu=array(
	array('label'=>'Журнал замовлень на послуги', 'url'=>array('index')),
	array('label'=>'Створити замовлення', 'url'=>array('create')),
	array('label'=>'Перегляд замовлення', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити замовлення <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
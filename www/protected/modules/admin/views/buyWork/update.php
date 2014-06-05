<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */

$this->menu=array(
	array('label'=>'Журнал замовлень послуг', 'url'=>array('index')),
	array('label'=>'Перегляд замовлення', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Змінити запис <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
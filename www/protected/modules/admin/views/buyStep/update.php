<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */


$this->menu=array(
	array('label'=>'Журнал виконання замовлень', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Перегляд виконання', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити перегляд <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
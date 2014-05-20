<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->menu=array(
	array('label'=>'Каталог товарів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Перегляд', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити запис <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
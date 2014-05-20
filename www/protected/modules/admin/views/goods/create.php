<?php
/* @var $this GoodsController */
/* @var $model Goods */


$this->menu=array(
	array('label'=>'Каталог товарів', 'url'=>array('index')),
);
?>

<h1>Додати товар</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
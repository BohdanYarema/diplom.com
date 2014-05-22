<?php
/* @var $this WorkController */
/* @var $model Work */


$this->menu=array(
	array('label'=>'Каталог послуг', 'url'=>array('index')),
);
?>

<h1>Додати послугу</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this WorkController */
/* @var $model Work */


$this->menu=array(
	array('label'=>'Каталог послуг', 'url'=>array('index')),
	array('label'=>'Додати послугу', 'url'=>array('create')),
	array('label'=>'Перегляд', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this StepController */
/* @var $model Step */


$this->menu=array(
	array('label'=>'Журнал етапів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Перегляд етапу', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити етап <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
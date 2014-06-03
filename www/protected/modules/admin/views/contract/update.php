<?php
/* @var $this ContractController */
/* @var $model Contract */


$this->menu=array(
	array('label'=>'Журнал договорів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Перегляд договору', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Оновити договір <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
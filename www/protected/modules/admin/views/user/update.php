<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Список користувачів', 'url'=>array('index')),
	array('label'=>'Перегляд', 'url'=>array('view', 'id'=>$model->id)),
        array('label'=>'Змінити пароль', 'url'=>array('password', 'id'=>$model->id)),
);
?>

<h1> Редагування користувача <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Особистий кабінет', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Змінить свої дані <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
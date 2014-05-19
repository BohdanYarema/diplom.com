<?php
/* @var $this UserController */
/* @var $model User */



$this->menu=array(
	array('label'=>'Журнал користувачів', 'url'=>array('index')),
	array('label'=>'Редагування користувачів', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалення користувача', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені що хочете знищити цю людину ?')),
);
?>

<h1>Перегляд #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'second_name',
		'email',
		'password',
		'tellephone',
		'adress',
		'role',
	),
)); ?>

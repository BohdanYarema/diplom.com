<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Список користувачів', 'url'=>array('index')),
	array('label'=>'Оновити', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити користувача', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені?')),
);
?>

<h1>Перегляд інформації #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'second_name',
		'email',
		'password',
		'tellephone',
		'adress',
		'role',
	),
)); ?>

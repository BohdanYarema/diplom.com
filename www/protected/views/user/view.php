<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Змінити свої дані', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Список замовлень', 'url'=>array('buy/select', 'id'=>$model->id)),
    array('label'=>'Замовити товар', 'url'=>array('buygoods/create')),
    array('label'=>'Замовити послугу', 'url'=>array('buywork/create')),
);
?>


<h1>Кабінет користувача <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'username',
		'second_name',
		'email',
		//'password',
		'tellephone',
		'adress',
		//'role',
	),
)); ?>






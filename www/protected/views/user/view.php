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



<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'username', 'label'=>'Ім\'я'),
        array('name'=>'second_name', 'label'=>'Прізвище'),
        array('name'=>'email', 'label'=>'Електронна пошта'),
        array('name'=>'tellephone', 'label'=>'Телефон'),
        array('name'=>'adress', 'label'=>'Адреса'),
    ),
)); ?>






<?php
    $this->menu=array(
	array('label'=>'Список користувачів', 'url'=>array('index')),
	//array('label'=>'Перегляд', 'url'=>array('view', 'id'=>$model->id)),
        //array('label'=>'Редагувати користувача', 'url'=>array('update', 'id'=>$model->id)),
    );
?>
Введіть новий пароль <br />
<?php
    echo CHtml::form();
    echo CHtml::textField('password');
    echo CHtml::submitButton('Змінити');
    echo CHtml::endForm();
?>
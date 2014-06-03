<?php
/* @var $this BuyController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	//array('label'=>'Статус виконання', 'url'=>array('#')),
);
?>

<h1>Замовлення</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'filter'=>$model,
    'id'=>'goods-grid',
    'columns'=>array(
        array('name'=>'id', 'header'=>'Код',),
        array('name'=>'number', 'header'=>'Номер замовлення'),
        array('name'=>'text', 'header'=>'Опис замовлення'),
        array('name'=>'data', 'header'=>'Дата','value' => 'date("j.m.Y H:h",$data->data)'),
        array('name'=>'user_id', 'header'=>'Код користувача'),
        array(
            'header'=>'перегляд',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
            'htmlOptions'=>array('style'=>'text-align:center'),
            'updateButtonOptions' => array('style'=>'display:none'),
            'deleteButtonOptions' => array('style'=>'display:none')
        ),
    ),
)); ?>

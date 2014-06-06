<?php
/* @var $this BuyStepController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Buy Steps</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'filter'=>$model,
    'id'=>'buystep-grid',
    'columns'=>array(
        array('name'=>'id', 'header'=>'Код',),
        array(
            'name' => 'data_b',
            'header'=>'Дата початку',
            'value' => 'CHtml::encode($data["data_b"])',
            'type' => 'date'),
        array(
            'name' => 'data_e',
            'header'=>'Дата закінчення',
            'value' => 'CHtml::encode($data["data_e"])',
            'type' => 'date'),
        array('name'=>'commnet', 'header'=>'Коментарі'),
        //array('name'=>'buy_id', 'header'=>'Код замовлення'),
        //array('name'=>'step_id', 'header'=>'Код етапу'),
        array(
            'name'=>'nameStep',
            'header'=>'Назва етапу',
            'value'=>'$data->nameStep->name'),
        array(
            'name'=>'nameStep',
            'header'=>'Опис',
            'value'=>'$data->nameStep->text'),
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
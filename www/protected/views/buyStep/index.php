<?php
/* @var $this BuyStepController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Монітринг вашого замовлення</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'filter'=>$model,
    'id'=>'buystep-grid',
    'columns'=>array(
        array('name'=>'id', 'header'=>'Код',),
        //array('name'=>'buy_id', 'header'=>'Код замовлення'),
        array(
            'name'=>'nameStep',
            'header'=>'Опис',
            'value'=>'$data->nameStep->text'),
        array(
            'name' => 'data_b_f',
            'header'=>'Дата початку фактичне',
            'value' => 'CHtml::encode($data["data_b_f"])',
            'type' => 'date'),
        array(
            'name' => 'data_e_f',
            'header'=>'Дата закінчення фактичне',
            'value' => 'CHtml::encode($data["data_e_f"])',
            'type' => 'date'),
            array(
            'name' => 'data_b_p',
            'header'=>'Дата початку планове',
            'value' => 'CHtml::encode($data["data_b_p"])',
            'type' => 'date'),
        array(
            'name' => 'data_e_p',
            'header'=>'Дата закінчення планове',
            'value' => 'CHtml::encode($data["data_e_p"])',
            'type' => 'date'),
        array('name'=>'commnet', 'header'=>'Стан'),
        //array('name'=>'step_id', 'header'=>'Код етапу'),
        
    ),
)); ?>
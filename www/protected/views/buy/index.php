<?php
/* @var $this BuyController */
/* @var $dataProvider CActiveDataProvider */
?>


<h1>Замовлення</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    //'filter'=>$model,
    'id'=>'buy-grid',
    'columns'=>array(
        //array('name'=>'id', 'header'=>'Код',),
        array('name'=>'number', 'header'=>'Номер замовлення'),
        array('name'=>'text', 'header'=>'Контактні дані'),
        array('name'=>'data', 'header'=>'Дата','value' => 'date("j.m.Y H:h",$data->data)'),
        array(
            'name'=>'client',
            'header'=>'Замовник',
            'value'=>'$data->client->username'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{list}',
            'buttons'=>array
            (
                'list' => array
                (
                    'icon'=>'list white',
                    'url'=>'Yii::app()->createUrl("buystep/select", array("id"=>$data->id))',
                    'options'=>array(
                        'class'=>'btn btn-small btn-info',
                    ),
                ),
            'htmlOptions'=>array(
                'style'=>'width: 220px',
            ),
        ),
    ),
))); 

?>

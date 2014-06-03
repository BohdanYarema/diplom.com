<?php
/* @var $this GoodsController */
/* @var $model Goods */


$this->menu=array(
	array('label'=>'Додати', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#goods-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Каталог товарів</h1>

<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'filter'=>$model,
    'id'=>'goods-grid',
    'columns'=>array(
        array('name'=>'id', 'header'=>'Код',),
        array('name'=>'name', 'header'=>'Назва'),
        array('name'=>'article', 'header'=>'Артикул'),
        'data' => array(
            'name' => 'data',
            'value' => 'date("j.m.Y H:h",$data->data)',
            //'filter' => false,
        ),
        'status' => array(
            'name' => 'status',
            'value' => '($data->status==1)?"Є на складі":"Немає на складі"',
            'filter' => array(1=>"Є на складі", 0=>"Немає на складі"),
        ),
        array('name'=>'pay', 'header'=>'Ціна'),
        array(
            'header'=>'перегляд',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
            'htmlOptions'=>array('style'=>'text-align:center'),
            //'updateButtonOptions' => array('style'=>'display:none'),
            //'deleteButtonOptions' => array('style'=>'display:none')
        ),
    ),
)); ?>

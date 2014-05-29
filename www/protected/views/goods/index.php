<?php
/* @var $this GoodsController */
/* @var $model Goods */

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

<h1>Журнал товарів</h1>

<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'article',
		'text',
		//'data',
		'pay',
		'status' => array(
            'name' => 'status',
            'value' => '($data->status==1)?"Є на складі":"Немає на складі"',
            'filter' => array(1=>"Є на складі", 0=>"Немає на складі"),
        ),
		array(
			'class'=>'CButtonColumn',
            'updateButtonOptions' => array('style'=>'display:none'),
            'deleteButtonOptions' => array('style'=>'display:none')
		),
	),
)); ?>
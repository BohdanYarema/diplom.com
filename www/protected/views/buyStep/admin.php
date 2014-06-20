<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */

$this->breadcrumbs=array(
	'Buy Steps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BuyStep', 'url'=>array('index')),
	array('label'=>'Create BuyStep', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#buy-step-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Buy Steps</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'buy-step-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'data_b_f',
		'data_e_f',
        'data_b_p',
		'data_e_p',
		'commnet',
		'buy_id',
		'step_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

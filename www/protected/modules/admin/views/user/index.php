<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	//array('label'=>'Список користувачів', 'url'=>array('index')),
	//array('label'=>'Перегляд', 'url'=>array('view', 'id'=>$model->id)),
        //array('label'=>'Редагувати користувача', 'url'=>array('update', 'id'=>$model->id)),
    );


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал користувачів</h1>

<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'second_name',
		'email',
		'password',
		'tellephone',
		'adress',
		'role' => array (
                    'name' => 'role',
                    'value' => '($data -> role==1)?"User":"Admin"',
                    'filter' => array (2=>"Admin",1=>"User"),
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

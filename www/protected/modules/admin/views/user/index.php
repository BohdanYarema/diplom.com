<?php
/* @var $this UserController */
/* @var $model User */


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

<h1>Список користувачів</h1>


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
    'id'=>'user-grid',
    'columns'=>array(
        array('name'=>'id', 'header'=>'Код',),
        array('name'=>'username', 'header'=>'Логін'),
        array('name'=>'second_name', 'header'=>'Прізвище'),
        array('name'=>'email', 'header'=>'Електронна пошта'),
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
<?php
/* @var $this StepController */
/* @var $model Step */


$this->menu=array(
	array('label'=>'Журнал етапів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Оновити етап', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалення етапу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені в своїх діях?')),
);
?>

<h1>Перегляд етапу #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'text',
	),
)); ?>

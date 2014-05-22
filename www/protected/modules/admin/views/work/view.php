<?php
/* @var $this WorkController */
/* @var $model Work */


$this->menu=array(
	array('label'=>'Каталог послуг', 'url'=>array('index')),
	array('label'=>'Додати нову', 'url'=>array('create')),
	array('label'=>'Оновити', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити послугу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені?')),
);
?>

<h1>Перегляд послуги #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'article',
		'name',
		'text',
		'pay',
		'status',
		'data',
	),
)); ?>

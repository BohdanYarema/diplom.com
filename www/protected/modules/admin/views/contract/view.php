<?php
/* @var $this ContractController */
/* @var $model Contract */


$this->menu=array(
	array('label'=>'Журнал договорів', 'url'=>array('index')),
	array('label'=>'Додати новий', 'url'=>array('create')),
	array('label'=>'Оновити договір', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Видалити договір', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ви впевнені що робите ?')),
);
?>

<h1>Перегляд договору #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'number',
		'text',
	),
)); ?>

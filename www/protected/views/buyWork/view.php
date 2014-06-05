<?php
/* @var $this BuyWorkController */
/* @var $model BuyWork */

$this->breadcrumbs=array(
	'Buy Works'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BuyWork', 'url'=>array('index')),
	array('label'=>'Create BuyWork', 'url'=>array('create')),
	array('label'=>'Update BuyWork', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BuyWork', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BuyWork', 'url'=>array('admin')),
);
?>

<h1>View BuyWork #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buy_id',
		'work_id',
		'calc',
	),
)); ?>

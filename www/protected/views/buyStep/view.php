<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */

$this->breadcrumbs=array(
	'Buy Steps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BuyStep', 'url'=>array('index')),
	array('label'=>'Create BuyStep', 'url'=>array('create')),
	array('label'=>'Update BuyStep', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BuyStep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BuyStep', 'url'=>array('admin')),
);
?>

<h1>View BuyStep #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_b',
		'data_e',
		'commnet',
		'buy_id',
		'step_id',
	),
)); ?>

<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */

$this->breadcrumbs=array(
	'Buy Steps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BuyStep', 'url'=>array('index')),
	array('label'=>'Create BuyStep', 'url'=>array('create')),
	array('label'=>'View BuyStep', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BuyStep', 'url'=>array('admin')),
);
?>

<h1>Update BuyStep <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
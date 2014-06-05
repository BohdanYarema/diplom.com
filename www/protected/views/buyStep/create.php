<?php
/* @var $this BuyStepController */
/* @var $model BuyStep */

$this->breadcrumbs=array(
	'Buy Steps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BuyStep', 'url'=>array('index')),
	array('label'=>'Manage BuyStep', 'url'=>array('admin')),
);
?>

<h1>Create BuyStep</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
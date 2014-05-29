<?php
/* @var $this WorkController */
/* @var $model Work */


$this->menu=array(
	array('label'=>'Журнал послуг', 'url'=>array('index')),
);
?>

<h1>Перегляд послуги <?php echo $model->name; ?></h1>

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

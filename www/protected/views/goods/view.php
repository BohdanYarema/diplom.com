<?php
/* @var $this GoodsController */
/* @var $model Goods */


$this->menu=array(
	array('label'=>'Журнал товарів', 'url'=>array('index')),
);
?>

<h1>Перегляд товару <?php echo $model->name; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'article',
		//'data',
		'pay',
		//'status',
	),
)); ?>

<h1 style="text-align: center;">
<?php $this->beginWidget('CHtmlPurifier'); ?>
    <?php echo $model->text; ?>
<?php $this->endWidget(); ?>
</h1>
<?php
/* @var $this WorkController */
/* @var $model Work */


$this->menu=array(
	array('label'=>'Журнал послуг', 'url'=>array('index')),
);
?>

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

<p style="text-align: center;">
<?php $this->beginWidget('CHtmlPurifier'); ?>
    <?php echo $model->text; ?>
<?php $this->endWidget(); ?>
</p>
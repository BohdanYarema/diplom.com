<?php
/* @var $this BuyController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	//array('label'=>'Статус виконання', 'url'=>array('#')),
);
?>

<h1>Замовлення</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

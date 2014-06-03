<?php
/* @var $this ContractController */
/* @var $model Contract */


$this->menu=array(
	array('label'=>'Журнал договорів', 'url'=>array('index')),
);
?>

<h1>Додати новий</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
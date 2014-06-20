<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page"> 
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Про нас', 'url'=>array('/site/page', 'view'=>'about')),
                array('label' => 'Наші послуги', 'items' => array(
                    array('label'=>'Товари', 'url'=>array('/goods'), 'visible'=>!Yii::app()->user->isGuest, ),
                    array('label'=>'Послуги', 'url'=>array('/work'), 'visible'=>!Yii::app()->user->isGuest, ),
                )),
                array('label'=>'Контактна форма', 'url'=>array('/site/contact')),
                array('label' => 'Статистика', 'items' => array(
                    array('label'=>'Виконані проекти', 'url'=>array('/Selectbuy')),
                    array('label'=>'Критичні проекти', 'url'=>array('/Selectbuy')),
                )),
                array('label'=>'Особистий кабінет', 'url'=>array('/user/view/'.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest, ),
                array('label'=>'Адмін панель', 'url'=>array('/admin'), 'visible'=>!Yii::app()->user->isGuest, ),
                array('label'=>'Реєстрація', 'url'=>array('/site/Registration'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Уввікмніть', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Вийти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

    <br />
    <br />
    <br />
	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->

</body>
</html>

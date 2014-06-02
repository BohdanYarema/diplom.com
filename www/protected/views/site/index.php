<h1 style="text-align: center;">"Вас вітає ПВПТ"</h1>
<?php
    $criteria=new CDbCriteria;
    $criteria->select='*';  // вибираємо тільки поле 'title'
    $criteria->condition='user_id=:user_id';
    $criteria->params=array(':user_id'=>2);
    $post=Buy::model()->find($criteria); // параметр $params не потрібен
?>

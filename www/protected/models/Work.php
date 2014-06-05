<?php

/**
 * This is the model class for table "{{work}}".
 *
 * The followings are the available columns in table '{{work}}':
 * @property integer $id
 * @property string $article
 * @property string $name
 * @property string $text
 * @property double $pay
 * @property integer $status
 * @property integer $data
 */
class Work extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{work}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
     
     
     public static function all()
	{
	   $models = self::model()->findAll();
       $array = array();
       foreach($models as $data){
            $array[$data->id]=$data->name;
       }
		return $array;
	}
     
     
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('article', 'unique'),
            array('name', 'unique'),
			array('id, status, data', 'numerical', 'integerOnly'=>true),
			array('pay', 'numerical'),
			array('article, name, text', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, article, name, text, pay, status, data', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'article' => 'Артикул',
			'name' => 'Назва',
			'text' => 'Опис',
			'pay' => 'Ціна',
			'status' => 'Статус',
			'data' => 'Дата',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('article',$this->article,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('pay',$this->pay);
		$criteria->compare('status',$this->status);
		$criteria->compare('data',$this->data);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Work the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function beforeSave()
	{
        if($this->isNewRecord)
            $this->data = time();
		return parent::beforeSave();
	}
    
}

<?php

/**
 * This is the model class for table "{{buy_step}}".
 *
 * The followings are the available columns in table '{{buy_step}}':
 * @property integer $id
 * @property string $data_b_f
 * @property string $data_e_f
 * @property string $commnet
 * @property integer $buy_id
 * @property integer $step_id
 * @property string $data_b_p
 * @property string $data_e_p
 */
class BuyStep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{buy_step}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('buy_id, step_id', 'numerical', 'integerOnly'=>true),
			array('commnet', 'length', 'max'=>255),
			array('data_b_f, data_e_f, data_b_p, data_e_p', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, data_b_f, data_e_f, commnet, buy_id, step_id, data_b_p, data_e_p', 'safe', 'on'=>'search'),
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
            'buys' => array(self::BELONGS_TO, 'Buy', 'buy_id'),
            'nameStep' => array(self::BELONGS_TO, 'Step', 'step_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data_b_f' => 'Фактична дата початку',
			'data_e_f' => 'Фактична дата закінчення',
			'data_b_p' => 'Планова дата початку',
			'data_e_p' => 'Планова дата закінчення',
			'commnet' => 'Commnet',
			'buy_id' => 'Buy',
			'step_id' => 'Step',
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
		$criteria->compare('data_b_f',$this->data_b_f,true);
		$criteria->compare('data_e_f',$this->data_e_f,true);
		$criteria->compare('commnet',$this->commnet,true);
		$criteria->compare('buy_id',$this->buy_id);
		$criteria->compare('step_id',$this->step_id);
		$criteria->compare('data_b_p',$this->data_b_p,true);
		$criteria->compare('data_e_p',$this->data_e_p,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BuyStep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

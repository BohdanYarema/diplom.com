<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $second_name
 * @property string $email
 * @property string $password
 * @property string $tellephone
 * @property string $adress
 * @property integer $role
 */
class User extends CActiveRecord
{
    const ROLE_ADMIN = 'administrator';
    const ROLE_USER = 'user';
    const ROLE_BANNED = 'banned';
    public $verifyCode;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('password, email, username','required'),
            array('email','email'),
            array('username','unique'),
			array('email','unique'),
            array('username','match','pattern'=>'/^([A-Za-z0-9 ]+)$/u','message'=>'Доспустимі символи (A-Z,a-z,0-9)'),
            array('role', 'numerical', 'integerOnly'=>true),
			array('username, second_name, email, password, tellephone, adress', 'length', 'max'=>255),
             array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on' => 'registration'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, second_name, email, password, tellephone, adress, role', 'safe', 'on'=>'search'),
		);
	}
    public function searchPosit($userid){
    
        $criteria = new CDbCriteria();
        $criteria->select = "*";
    
        $criteria->with = array( 'client');
        $criteria->params = array(':param' => $userid);
        $criteria->condition = 'user_id=:param';
        
        $result=Buy::model()->findAll($criteria);
        return $result;
        
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		
		return array(
		      'tobuy' => array(self::HAS_MANY, 'Buy', 'user_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Імя',
			'second_name' => 'Фамілія',
			'email' => 'E-mail',
			'password' => 'Пароль',
			'tellephone' => 'Телефон',
			'adress' => 'Адреса',
			'role' => 'Роль',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('tellephone',$this->tellephone,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function beforeSave()
	{
	   if ($this->isNewRecord)
        //$this->Created = time();
        if ($this->isNewRecord)
        $this->role = 1;
	   $this->password = md5('Us3r=>'.$this->password);
		return parent::beforeSave();
	} 
}

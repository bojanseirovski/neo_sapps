<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $email
 * @property string $fname
 * @property string $lname
 * @property string $password
 * @property string $username
 * @property string $country
 */
class Users extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('email, fname, lname, password, username, country', 'required'),
            array('email, username', 'length', 'max' => 120),
            array('fname, lname', 'length', 'max' => 30),
            array('password', 'length', 'max' => 64),
            array('country', 'length', 'max' => 200),
            array('twitter', 'length', 'max' => 200),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, email, fname, lname, password, username, country', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'email' => 'E-mail',
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'password' => 'Password',
            'username' => 'Username',
            'country' => 'Country',
            'twitter' => 'Twiiter',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('fname', $this->fname, true);
        $criteria->compare('lname', $this->lname, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('twitter', $this->country, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
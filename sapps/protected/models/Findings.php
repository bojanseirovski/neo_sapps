<?php

/**
 * This is the model class for table "findings".
 *
 * The followings are the available columns in table 'findings':
 * @property integer $id
 * @property integer $user_id
 * @property string $designation
 * @property string $creator
 * @property integer $neo_score
 * @property string $discovery_date
 * @property string $ra
 * @property string $declination
 * @property double $v
 * @property string $date_updated
 * @property string $note
 * @property integer $nob
 * @property integer $arc
 * @property integer $h
 * @property string $viewpoint_type
 * @property integer $ephemeris_interval
 * @property integer $start_ephemerides
 * @property string $display_positions
 * @property integer $display_motions
 * @property string $motion
 * @property string $output
 * @property string $suppress_output
 */
class Findings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Findings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'findings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, designation, creator, neo_score, discovery_date, ra, declination, v, date_updated, note, nob, arc, h, viewpoint_type, ephemeris_interval, start_ephemerides, display_positions, display_motions, motion, output, suppress_output', 'required'),
			array('user_id, neo_score, nob, arc, h, ephemeris_interval, start_ephemerides, display_motions', 'numerical', 'integerOnly'=>true),
			array('v', 'numerical'),
			array('designation', 'length', 'max'=>400),
			array('creator', 'length', 'max'=>300),
			array('discovery_date, date_updated', 'length', 'max'=>24),
			array('ra, declination', 'length', 'max'=>8),
			array('viewpoint_type', 'length', 'max'=>300),
			array('display_positions', 'length', 'max'=>10),
			array('motion', 'length', 'max'=>7),
			array('output', 'length', 'max'=>5),
			array('suppress_output', 'length', 'max'=>21),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, designation, creator, neo_score, discovery_date, ra, declination, v, date_updated, note, nob, arc, h, viewpoint_type, ephemeris_interval, start_ephemerides, display_positions, display_motions, motion, output, suppress_output', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'designation' => 'Designation',
			'creator' => 'Creator',
			'neo_score' => 'Neo Score',
			'discovery_date' => 'Discovery Date',
			'ra' => 'Ra',
			'declination' => 'Declination',
			'v' => 'V',
			'date_updated' => 'Date Updated',
			'note' => 'Note',
			'nob' => 'Numnber of Observations',
			'arc' => 'Arc',
			'h' => 'H',
			'viewpoint_type' => 'Viewpoint Type',
			'ephemeris_interval' => 'Ephemeris Interval',
			'start_ephemerides' => 'Start Ephemerides',
			'display_positions' => 'Display Positions',
			'display_motions' => 'Display Motions',
			'motion' => 'Motion',
			'output' => 'Output',
			'suppress_output' => 'Suppress Output',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('creator',$this->creator,true);
		$criteria->compare('neo_score',$this->neo_score);
		$criteria->compare('discovery_date',$this->discovery_date,true);
		$criteria->compare('ra',$this->ra,true);
		$criteria->compare('declination',$this->declination,true);
		$criteria->compare('v',$this->v);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('nob',$this->nob);
		$criteria->compare('arc',$this->arc);
		$criteria->compare('h',$this->h);
		$criteria->compare('viewpoint_type',$this->viewpoint_type,true);
		$criteria->compare('ephemeris_interval',$this->ephemeris_interval);
		$criteria->compare('start_ephemerides',$this->start_ephemerides);
		$criteria->compare('display_positions',$this->display_positions,true);
		$criteria->compare('display_motions',$this->display_motions);
		$criteria->compare('motion',$this->motion,true);
		$criteria->compare('output',$this->output,true);
		$criteria->compare('suppress_output',$this->suppress_output,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
}
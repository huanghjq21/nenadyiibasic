<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_educationprofiletable".
 *
 * @property integer $id
 * @property integer $userId
 * @property string $fromDate
 * @property string $tillDate
 * @property string $educationProfile
 *
 * @property User $user
 */
class UserEducationprofiletable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_educationprofiletable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'fromDate', 'tillDate'], 'required'],
            [['userId'], 'integer'],
            [['fromDate', 'tillDate'], 'safe'],
            [['educationProfile'], 'string', 'max' => 1024],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'fromDate' => 'From Date',
            'tillDate' => 'Till Date',
            'educationProfile' => 'Education Profile',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}

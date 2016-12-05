<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "available".
 *
 * @property string $Id
 * @property string $UserId
 * @property string $Start
 * @property string $End
 *
 * @property Users $user
 */
class Available extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'available';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId'], 'integer'],
            [['Start', 'End'], 'safe'],
            [['UserId'], 'unique'],
            [['UserId'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['UserId' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'UserId' => 'User ID',
            'Start' => 'Start',
            'End' => 'End',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['Id' => 'UserId']);
    }
}

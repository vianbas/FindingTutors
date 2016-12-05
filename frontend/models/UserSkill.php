<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_skill".
 *
 * @property string $Id
 * @property string $UserId
 * @property string $SkillId
 *
 * @property Skill $skill
 * @property Users $user
 */
class UserSkill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'SkillId'], 'integer'],
            [['SkillId'], 'unique'],
            [['SkillId'], 'exist', 'skipOnError' => true, 'targetClass' => Skill::className(), 'targetAttribute' => ['SkillId' => 'Id']],
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
            'SkillId' => 'Skill ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkill()
    {
        return $this->hasOne(Skill::className(), ['Id' => 'SkillId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['Id' => 'UserId']);
    }
}

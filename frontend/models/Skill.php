<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property string $Id
 * @property string $NamaSkill
 * @property string $KategoriId
 *
 * @property Kategori $kategori
 * @property UserSkill $userSkill
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KategoriId'], 'integer'],
            [['NamaSkill'], 'string', 'max' => 30],
            [['KategoriId'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['KategoriId' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'NamaSkill' => 'Nama Skill',
            'KategoriId' => 'Kategori ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['Id' => 'KategoriId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserSkill()
    {
        return $this->hasOne(UserSkill::className(), ['SkillId' => 'Id']);
    }
}

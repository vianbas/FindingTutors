<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $Id
 * @property string $Email
 * @property string $Nama
 * @property string $ProdiId
 * @property integer $Angkatan
 * @property integer $NomorHp
 * @property string $Deskripsi
 *
 * @property Available $available
 * @property UserSkill[] $userSkills
 * @property Prodi $prodi
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProdiId', 'Angkatan', 'NomorHp'], 'integer'],
            [['Email', 'Nama'], 'string', 'max' => 50],
            [['Deskripsi'], 'string', 'max' => 255],
            [['ProdiId'], 'unique'],
            [['ProdiId'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['ProdiId' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Email' => 'Email',
            'Nama' => 'Nama',
            'ProdiId' => 'Prodi ID',
            'Angkatan' => 'Angkatan',
            'NomorHp' => 'Nomor Hp',
            'Deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvailable()
    {
        return $this->hasOne(Available::className(), ['UserId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserSkills()
    {
        return $this->hasMany(UserSkill::className(), ['UserId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['Id' => 'ProdiId']);
    }
}

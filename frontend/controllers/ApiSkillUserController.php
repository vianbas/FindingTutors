<?php

namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use frontend\models\Transaksi;
use frontend\models\TransaksiSearch;
use frontend\models\Skill;
use frontend\models\SkillSearch;
use frontend\models\Available;
use frontend\models\AvailableSearch;
use frontend\models\Kategori;
use frontend\models\KategoriSearch;
use frontend\models\Prodi;
use frontend\models\ProdiSearch;
use frontend\models\UserSkill;
use frontend\models\UserSkillSearch;
use frontend\models\Users;
use frontend\models\UsersSearch;

class ApiSkillUserController extends ActiveController
{
   /**
     * @inheritdoc
     */    
     public $modelClass = "frontend\models\UserSkill";
     
   public function actionUserSkill($skill){
       $string = urldecode($skill);
       $test = Yii::$app->db->createCommand('SELECT q.* FROM users q JOIN user_skill s  ON q.Id = s.UserId  JOIN skill u ON s.SkillId = u.id WHERE(u.NamaSkill LIKE  "%'.$string.'%") GROUP BY q.Nama')->queryAll();       
        return $test;  
   }
   
   public function actionSkillUser($user){   
       $test = Yii::$app->db->createCommand('SELECT c.* FROM user_skill u JOIN skill c ON u.SkillId=c.Id WHERE(u.UserId = '.$user.')')->queryAll();       
        return $test;  
   }
   
}

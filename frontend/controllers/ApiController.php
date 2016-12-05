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

class ApiController extends ActiveController
{
   /**
     * @inheritdoc
     */
     public $modelClass = "frontend\models\Users";
     
     
     public function actionUser($email){
        $string = urldecode($email); 
        $users = Users::find()->where(['Email'=>$string]);
        $DataProvider = new  \yii\data\ActiveDataProvider(
            [
               'query'=>$users,
            ]     
        );         
        return $DataProvider;   
    }
    
//    public function actionSkill(){        
//        $searchModel = new SkillSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        return $dataProvider;
//    }
//    
    public function actionSkillCategory($id){        
        $skill = Skill::find()->where(['KategoriId'=>$id]);
        $DataProvider = new  \yii\data\ActiveDataProvider(
            [
               'query'=>$skill,
            ]     
        );         
        return $DataProvider;   
    }
    
    public function actionCategory(){        
        $searchModel = new KategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $dataProvider;
    }
        
    public function actionProdi($id){ 
        $searchModel = new ProdiSearch(['Id'=>$id]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $dataProvider;
    }
}

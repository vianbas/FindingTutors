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

class ApiCategoryController extends ActiveController
{
   /**
     * @inheritdoc
     */
     public $modelClass = "frontend\models\Kategori";
     
            
}

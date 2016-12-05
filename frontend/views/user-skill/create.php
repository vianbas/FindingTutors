<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\UserSkill */

$this->title = 'Create User Skill';
$this->params['breadcrumbs'][] = ['label' => 'User Skills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-skill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

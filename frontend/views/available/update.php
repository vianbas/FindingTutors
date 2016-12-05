<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Available */

$this->title = 'Update Available: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Availables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="available-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

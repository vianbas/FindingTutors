<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Available */

$this->title = 'Create Available';
$this->params['breadcrumbs'][] = ['label' => 'Availables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="available-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

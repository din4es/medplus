<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reception $model */

$this->title = 'Запись';
$this->params['breadcrumbs'][] = ['label' => 'Receptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reception-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

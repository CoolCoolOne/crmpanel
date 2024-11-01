<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Offers $model */

$this->title = 'Изменить оффер: ' . $model->name;

?>
<div class="offers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use app\models\Offers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var app\models\OffersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$this->title = 'Офферы';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="offers-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
        'columns' => [
            [
                'attribute' => 'id',
                'filter' => false,
            ],
            [
                'attribute' => 'name',
                'filterOptions' => ['style' => 'background-color: #198754'],
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'поиск..'
                 ]
            ],
            [
                'attribute' => 'email',
                'filterOptions' => ['style' => 'background-color: #198754'],
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'поиск.. '
                 ]
            ],
            [
                'attribute' => 'phone',
                'filter' => false
            ],
            [
                'attribute' => 'date',
                'filter' => false
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Offers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
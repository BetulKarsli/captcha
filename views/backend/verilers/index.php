<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\captcha\models\VerilerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Verilers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verilers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Verilers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'istenen_captcha',
            'captcha_tipi:ntext',
            'karakter_sayisi',
            'time:datetime',
            'basari_durumu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

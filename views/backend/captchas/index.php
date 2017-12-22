<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\captcha\models\CaptchaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Captchas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="captchas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Captchas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ee',
            'dsa',
            'dsad',
            'dsadas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

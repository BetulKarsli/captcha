<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Verilers */

$this->title = $model->istenen_captcha;
$this->params['breadcrumbs'][] = ['label' => 'Verilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verilers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->istenen_captcha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->istenen_captcha], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'istenen_captcha',
            'captcha_tipi:ntext',
            'karakter_sayisi',
            'time:datetime',
            'basari_durumu',
        ],
    ]) ?>

</div>

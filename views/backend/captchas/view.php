<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Captchas */

$this->title = $model->ee;
$this->params['breadcrumbs'][] = ['label' => 'Captchas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="captchas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ee], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ee], [
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
            'ee',
            'dsa',
            'dsad',
            'dsadas',
        ],
    ]) ?>

</div>

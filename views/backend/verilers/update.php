<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Verilers */

$this->title = 'Update Verilers: ' . $model->istenen_captcha;
$this->params['breadcrumbs'][] = ['label' => 'Verilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->istenen_captcha, 'url' => ['view', 'id' => $model->istenen_captcha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="verilers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

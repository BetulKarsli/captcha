<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Captchas */

$this->title = 'Update Captchas: ' . $model->ee;
$this->params['breadcrumbs'][] = ['label' => 'Captchas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ee, 'url' => ['view', 'id' => $model->ee]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="captchas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

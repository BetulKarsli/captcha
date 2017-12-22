<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Captchas */

$this->title = 'Create Captchas';
$this->params['breadcrumbs'][] = ['label' => 'Captchas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="captchas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

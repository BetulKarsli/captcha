<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Verilers */

$this->title = 'Create Verilers';
$this->params['breadcrumbs'][] = ['label' => 'Verilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="verilers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

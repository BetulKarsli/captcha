<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\VerilerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="verilers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'istenen_captcha') ?>

    <?= $form->field($model, 'captcha_tipi') ?>

    <?= $form->field($model, 'karakter_sayisi') ?>

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'basari_durumu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

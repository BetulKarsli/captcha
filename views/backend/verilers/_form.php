<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Verilers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="verilers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'istenen_captcha')->textInput() ?>

    <?= $form->field($model, 'captcha_tipi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'karakter_sayisi')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'basari_durumu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

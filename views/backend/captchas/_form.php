<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\captcha\models\Captchas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="captchas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ee')->textInput() ?>

    <?= $form->field($model, 'dsa')->textInput() ?>

    <?= $form->field($model, 'dsad')->textInput() ?>

    <?= $form->field($model, 'dsadas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

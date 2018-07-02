<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\socialmedia\models\Socialmedia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="socialmedia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

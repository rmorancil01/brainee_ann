<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\about\models\BraineeAboutUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brainee-about-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mission')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

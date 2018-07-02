<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\modules\braineeabouts\models\BraineeAboutUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brainee-about-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mission')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'vision')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_fb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'geo_x')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'geo_y')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'school_id')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\geolocation\models\Geolocation;
use backend\modules\schools\models\Schools;

/* @var $this yii\web\View */
/* @var $model backend\modules\contactus\models\Contactus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'school_id')->dropDownList(
        ArrayHelper::map(Schools::find()->all(),'school_name','school_name'),
         ['prompt'=>'Select...'])
         ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_id')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

   
    <?= $form->field($model,'geolocation_id')->dropDownList(
        ArrayHelper::map(Geolocation::find()->all(),'id','id'),
         ['prompt'=>'Select...'])
         ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

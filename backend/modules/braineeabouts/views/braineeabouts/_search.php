<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\braineeabouts\models\BraineeaboutsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brainee-about-us-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mission') ?>

    <?= $form->field($model, 'vision') ?>

    <?= $form->field($model, 'school_address') ?>

    <?= $form->field($model, 'school_contact') ?>

    <?php // echo $form->field($model, 'school_email') ?>

    <?php // echo $form->field($model, 'school_website') ?>

    <?php // echo $form->field($model, 'school_fb') ?>

    <?php // echo $form->field($model, 'school_ig') ?>

    <?php // echo $form->field($model, 'school_twitter') ?>

    <?php // echo $form->field($model, 'geo_x') ?>

    <?php // echo $form->field($model, 'geo_y') ?>

    <?php // echo $form->field($model, 'school_id') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

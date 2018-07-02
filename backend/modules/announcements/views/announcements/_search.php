<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\announcements\models\AnnouncementsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcements-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'senderId') ?>

    <?= $form->field($model, 'receiverId') ?>

    <?= //$form->field($model, 'topicId') ?>

    <?= $form->field($model, 'ann_subject') ?>

    <?php // echo $form->field($model, 'ann_body') ?>

    <?php // echo $form->field($model, 'toEmail') ?>

    <?php // echo $form->field($model, 'dur_start') ?>

    <?php // echo $form->field($model, 'dur_end') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

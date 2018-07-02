<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\topics\models\Topics */

$this->title = 'Update Topics: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'topic_id' => $model->topic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="topics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

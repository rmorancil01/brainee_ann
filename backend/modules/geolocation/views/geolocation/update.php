<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\geolocation\models\Geolocation */

$this->title = 'Update Geolocation: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Geolocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="geolocation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

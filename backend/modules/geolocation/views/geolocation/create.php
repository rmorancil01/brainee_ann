<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\geolocation\models\Geolocation */

$this->title = 'Create Geolocation';
$this->params['breadcrumbs'][] = ['label' => 'Geolocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geolocation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

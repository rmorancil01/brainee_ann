<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\announcements\models\Announcements */

$this->title = 'Create Announcements';
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcements-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

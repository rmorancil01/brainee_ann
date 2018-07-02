<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\braineeabouts\models\BraineeAboutUs */

$this->title = 'Create Brainee About Us';
$this->params['breadcrumbs'][] = ['label' => 'Brainee About uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brainee-about-us-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

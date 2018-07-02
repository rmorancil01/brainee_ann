<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\about\models\BraineeAboutUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brainee About uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brainee-about-us-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Brainee About Us', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mission',
            'vision',
            'school_id',
            'created_date',
            //'date_modified',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

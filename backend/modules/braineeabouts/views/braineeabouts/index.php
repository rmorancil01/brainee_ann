<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\braineeabouts\models\BraineeaboutsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brainee About us';
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
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'school_id',
            'mission',
            'vision',
            'school_address',
            'school_contact',
            //'school_email:email',
            'school_website',
            //'school_fb',
            //'school_ig',
            //'school_twitter',
            //'geo_x',
            //'geo_y',
            
            //'created_date',
            //'date_modified',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\socialmedia\models\SocialmediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Socialmedia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socialmedia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Socialmedia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'school_website',
            'school_facebook',
            'school_twitter',
            'school_ig',
            //'created_date',
            //'date_modified',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

namespace backend\modules\events\controllers;

use yii\web\Controller;

/**
 * Default controller for the `events` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

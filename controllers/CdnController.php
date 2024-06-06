<?php

namespace app\controllers;

use yii\web\Controller;

class CdnController extends Controller
{
    public $layout = 'cdn-layout';

    public function actionIndex()
    {
        return $this->render('index');
    }
}

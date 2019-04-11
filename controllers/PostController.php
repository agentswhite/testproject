<?php

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    /*метод, который принимает 2 пар-ма, 1 обязат, 2 необязат, в случае если 2 пар-р
    не передан, он должен быть равен 1. путь должен быть post/article
    */
    public function actionArticle($test1, $test2 = 1)
    {
        return $this->render('test', ['test1' => $test1, 'test2' => $test2]);
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: gnom
 * Date: 12.10.2018
 * Time: 12:53
 */

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{


    public function actionIndex()
    {
//        $id = \Yii::$app->request->get('id');
        $model = new Test();
        $title = $model->title = 'Привет';
//        var_dump($model->validate());
//        var_dump($model->getErrors());

//        $this->layout = false;
        return $this->render('index', [
            'title' => $title,
            'content' => 'dz-1'
        ]);
    }
}
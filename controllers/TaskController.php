<?php
/**
 * Created by PhpStorm.
 * User: gnom
 * Date: 12.10.2018
 * Time: 12:53
 */

namespace app\controllers;

use app\models\tables\Task;
use app\models\tables\Users;
use app\models\Test;
use app\models\User;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
//        $id = \Yii::$app->request->get('id');
//        $model = new Test();
//        $title = $model->title = 'Привет';
////        var_dump($model->validate());
////        var_dump($model->getErrors());
//
////        $this->layout = false;
//        return $this->render('index', [
//            'title' => $title,
//            'content' => 'dz-1'
//        ]);
//
//        \Yii::$app->db->createCommand("
//        INSERT INTO task(name_id, task, description, created) VALUES
//        ('2', 'тест_сентябрь', 'тут будет описание сентября', NOW()),
//        ('2', 'тест2_сентябрь', 'тут будет описание 2сентября', NOW()),
//        ('2', 'тест3 сентябрь', 'тут будет описание3 сентября', NOW())
//        ")->execute();
//
//        $resAll = \Yii::$app->db->createCommand("
//        SELECT * FROM task
//        ")->queryAll();
//        var_dump($resAll);
//
//        $resOne = \Yii::$app->db->createCommand("
//        SELECT * FROM task WHERE id = 1
//        ")->queryOne();
//        var_dump($resOne);
//
//        $id = 2;
//        $resOne = \Yii::$app->db->createCommand("
//        SELECT * FROM task WHERE id = :id
//        ")
//            ->bindParam(':id', $id)
//            ->queryOne();
//        var_dump($resOne);
//
        //создание
//        $user = new Users();
//        $user->login = 'testLogin';
//        $user->password = crypt('qwerty');
//        $user->role_id = 2;
//        $user->save();
//


        //изменение
        //        $user = Users::findOne(2);
//        $user->role = 2;
//        $user->save();
//        var_dump($user);
//
        //чтение
//        $user = Users::findOne(3);
//        var_dump($user);
//
        //удаление
//        $user = Users::findOne(2);
//        $user->delete();
//        var_dump($user);
//
        //вывод роли
//        $user = Users::getUserWithRole(3);
//        var_dump($user);


//        $tasks = Task::find()
//            ->all();
//        var_dump(Task::get);


//                $user = new Users();
//        $user->username = 'admin';
//        $user->password = \Yii::$app->security->generatePasswordHash('admin');
//        $user->role_id = 1;
//        $user->save();





        $tasks = \Yii::$app->db->createCommand("
        SELECT * FROM task WHERE MONTH(`created`) = MONTH(NOW()) AND YEAR(`created`) = YEAR(NOW())
         ")
            ->queryAll();


        return $this->render('index', [
            'tasks' => $tasks
        ]);

    }

    public function actionTask()
    {

    }
}
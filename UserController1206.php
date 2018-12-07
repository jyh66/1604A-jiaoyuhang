<?php

namespace app\controllers;
use Yii;
use app\models\user;
use yii\data\Pagination;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = user::find();
        $name = Yii::$app->request->post('name');
        $pages = new Pagination(['totalCount' => $query->where("name like '%$name%'")->count(), 'pageSize' => 4]);
        $data = $query->where("name like '%$name%'")->offset($pages->offset)->orderBy('id')->limit($pages->limit)->all();
        return $this->render('index', ['data' => $data, 'pages' => $pages,]);
    }
}
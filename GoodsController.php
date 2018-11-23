<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Goods;
use yii\data\Pagination;

class GoodsController extends Controller
{
    public function actionIndex(){
        $goods = Goods::find()->all();
        $countQuery = count($goods);     //查询记录数
        $pages = new Pagination(['totalCount' => $countQuery,'pagesize' => 2]);  //每页显示的条数
        $models = Goods::find()->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', ['data' => $models, 'pages' => $pages,]);  //返回数据
    }

    public function actionDelete(){
        $id = Yii::$app->request->get('id');   //查询ID
        $goods = Goods::findOne($id)->delete();  //删除数据
        return $this->redirect(['index']);
    }

    public function actionInsert(){
        return $this->render('insert');
    }

    public function actionInsert_do(){
        $goods = new goods();
        $name = Yii::$app->request->post('name');     //定义变量
        $sex = Yii::$app->request->post('sex');
        $idcar = Yii::$app->request->post('idcar');
        $class = Yii::$app->request->post('class');
        $goods->name=$name;
        $goods->sex=$sex;
        $goods->idcar=$idcar;
        $goods->class=$class;
        $goods->save();   //更新数据
        return $this->redirect(['index']);
    }

}
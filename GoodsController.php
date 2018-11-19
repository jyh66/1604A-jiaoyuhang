<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Goods;

class GoodsController extends Controller
{
    public function actionIndex()
    {
        $goods = Goods::find()->all();
        return $this->render('index',['data' => $goods]);
    }

    public function actionDelete()
    {
        $id=Yii::$app->request->get('id');
        $goods = goods::findOne($id)->delete();
        $this->redirect(['index']);

    }

}
?>
<?php
namespace app\modules\admin\controllers;
use yii\web\Controller;
use \yii\data\ActiveDataProvider;
use \yii\db\Query;


class RoleController extends Controller
{
    public function actionIndex(){
        var_dump(1);die;
        $auth = \Yii::$app->authManager;
        $data = new ActiveDataProvider([
            'query'=>(new Query)->from($auth->itemTable)->where('type=1')->orderBy('created_at desc'),
            'pagination'=>['pageSize'=>5]
        ]);
        return $this->render('index',['dataProvider'=>$data]);
    }
}
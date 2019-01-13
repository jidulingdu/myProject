<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 16:02
 */

namespace app\controllers;


use yii\web\Controller;

class CaptchaController extends Controller
{
    public function actions(){
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction' ,
                'maxLength' => 4,
                'minLength' => 4,
                'width' => 80,
                'height' => 40
            ],
        ];
    }

    public function actionIndex(){

        $model = new \app\models\Captcha(); //必须定义model ？？？

        if(\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post())){
            if($model -> validate()){
                echo '<script>alert("验证成功")</script>';
            }else{
                var_dump($model->getErrors());
            }
        }
        return $this->render('index' , ['model' => $model]);

    }
}
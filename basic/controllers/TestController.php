<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/28
 * Time: 11:10
 */

namespace app\controllers;


use app\models\Test;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex(){
    }
    public function actionValidate(){
        $data = [
            'Test'=>[ //必须加载在 Model 类名内
                'username'=>'zhangsan', //字段必须存在model类 rules()内
                'password'=>'123456',  //字段必须存在model类 rules()内
                'repassword'=>'123456',  //字段必须存在model类 rules()内
            ]
        ];
        $test = new Test();
        $test->load($data);
        if(!$test->validate()){
//            if(isset($test->getErrors()['username'])){
//                echo $test->getErrors()['username'][0];
//                return;
//            }
//            if(isset($test->getErrors()['password'])){
//                echo $test->getErrors()['password'][0];
//                return;
//            }
            dd($test->getErrors());
            return;
        }
    }
}
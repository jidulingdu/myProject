<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 15:58
 */
namespace app\models;

use yii\base\Model;

class Captcha extends Model{
//    添加的验证码字段
    public $verifyCode;
    public function rules()
    {
        //'captcha/captcha' 控制器/captcha
        return [
            ['verifyCode','captcha','captchaAction'=>'captcha/captcha','message'=>'验证码不正确']
        ];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/28
 * Time: 11:25
 */

namespace app\models;


use yii\base\Model;

class Test extends Model
{
    public $username;
    public $password;
    public $repassword;
    public function rules()
    {
        return [
//            [['username','password'],'required','message'=>'用户名密码不能为空']
            ['username','required','message'=>'用户名不能为空'],
            ['password','required','message'=>'密码不能为空'],
            ['password','compare','compareValue'=>'123456','message'=>'密码不正确'],//对比验证 值必须为123456
            ['password','compare','compareAttribute'=>'repassword','message'=>'两次密码不一致'],//对比验证 属性值对比必须一致
            ['repassword','safe'], //不验证字段
//            ['repassword','required'],
//            ['字段','double','min'=>'最小的值','max'=>'最大的值','tooSmall'=>'小于最小值的提示','tooBig'=>'大于最大值的提示','message'=>'必须是个数字'],
//            ['字段','email','message'=>''],
//            ['字段','in','range'=>['nan','nv'],'message'=>'提示信息'],
//            ['字段','integer','message'=>'提示信息'],
//            ['字段','match','pattern'=>'/正则/','message'=>''],
//            ['字段','string','min'=>'最小的值','max'=>'最大的值','tooShort'=>'字符过短的提示','tooBig'=>'字符过长的提示','message'=>'必须是个数字'],
//            ['字段','unique','message'=>''],//唯一验证
//            ['字段','captcha','captchaAction'=>'login/captcha','message'=>''],//验证码验证
        ];
    }

}







































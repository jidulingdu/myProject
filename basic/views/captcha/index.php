<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 16:08
 */
use yii\helpers\Html;
?>
<?=Html::beginForm('','post',['class'=>'form-inline'])?>
<?=\yii\captcha\Captcha::widget([
    'model'=>$model,
    'attribute'=>'verifyCode',
    'captchaAction'=>'captcha/captcha',//验证码的 action 与 Model 是对应的
    'template'=>'{input}{image}',
    'options'=>[
        'class'=>'form-control',
        'id'=>'verifyCode'
    ],
    'imageOptions'=>[
        'class'=>'imagecode',
        'alt'=>'点击刷新验证码'
    ]
])?>
<?=Html::submitButton('提交',['class'=>'btn btn-danger'])?>
<?=Html::endForm()?>


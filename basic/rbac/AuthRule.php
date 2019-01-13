<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 15:31
 */
namespace app\rbac;
class AuthRule extends \yii\rbac\Rule
{
    public $name = 'authRule';

    public function execute($user, $item, $params)
    {
        return isset($params['article'])?$params['article']['user_id']==$user:false;
    }
}
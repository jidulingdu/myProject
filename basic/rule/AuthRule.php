<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 14:52
 */
namespace app\rbac;

use \yii\rbac\Rule;

class AuthRule extends Rule
{
    public $name = 'authRule';

    public function execute($user_id, $item, $params)
    {
        return isset($params['article'])?$params['article']['user_id']==$user_id:false;
    }
}
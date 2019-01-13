<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 13:41
 */

namespace app\controllers;

use \app\rbac\AuthRule;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionIndex(){
        $auth = \Yii::$app->authManager;
        //创建 permission 节点
//        $perm = $auth->createPermission('auth-delete');
//        //添加节点描述
//        $perm ->description="删除节点";
//        //节点添加
//        $auth->add($perm);
        //获取节点
//        var_dump($auth->getPermission('auth-update'));
        //获取全部节点
//        var_dump($auth->getPermissions());
        //删除节点
//        var_dump($auth->remove($auth->getPermission('auth-delete')));
        //删除全部节点
//        $auth -> removeAllPermissions();
//        //创建角色
//        $role = $auth->createRole('admin');
//        //添加角色描述
//        $role->description ="管理员";
//        //添加角色
//        $auth->add($role);
        //获取角色
//        var_dump($auth->getRole("admin"));
        //获取全部角色
//        var_dump($auth->getRoles());
        //删除角色
//        var_dump($auth->remove($auth->getRole("admin")));
        //删除全部角色
//        $auth->removeAllRoles();
        //获取权限节点
//        $onePerm = $auth->getPermission('auth-update');
        //获取角色
//        $oneRole = $auth->getRole('admin');
        //角色添加权限节点
//        $auth->addChild($oneRole,$onePerm);
        //通过角色查找节点
//        var_dump($auth->getPermissionsByRole('admin'));
        //判断 Role 里面是否有 Permission
//        $onePerm = $auth->getPermission('auth-update');
//        $oneRole = $auth->getRole('admin');
//        var_dump($auth->hasChild($oneRole,$onePerm));
        //将一个 Permission 从 Role 角色中移除出来
//        $onePerm = $auth->getPermission('auth-update');
//        $oneRole = $auth->getRole('admin');
//        var_dump($auth->removeChild($oneRole,$onePerm));

        //添加角色到用户 assign 分配
//        $oneRole = $auth->getRole('admin');
//        $auth->assign($oneRole,1);
        //用户移除角色
//        $oneRole = $auth->getRole('admin');
//        var_dump($auth->revoke($oneRole,1));
        //读取 id 为 1 用户所拥有的 Permission
//        var_dump($auth->getPermissionsByUser(1));
        //检查 id 为 1 的用户是否有 Permission 的 auth-delete
//        var_dump($auth -> checkAccess(1 , 'auth-delete'));


//        Rule 操作
//        $authRule = new AuthRule();
//        $auth->add($authRule);

        //读取一个 Rule
//        $ruleName='authRule';
//        var_dump($auth->getRule($ruleName));

        //读取所有 Rule
//        $auth->getRules();

        //更新权限节点的rule_name 注意操作字段时 为 ruleName
//        $perm = $auth->getPermission('auth-update');
//        $perm->ruleName = 'authRule';
//        $auth->update($perm->name,$perm);

//      验证 auth-update 规则  检查 id 为 1 的用户是否有 Permission 的 auth-update
//        var_dump($auth -> checkAccess(1 , 'auth-update')); //false 因为添加了 auth-update权限节点添加了 ruleName->authRule
//        var_dump($auth->checkAccess(1,'auth-update',['article'=>['user_id'=>1]])); //true

        //删除一个 Rule
//        $ruleName='authRule';
//        $oneRule = $auth->getRule($ruleName);
//        $auth->remove($oneRule);
//      删除所有 Rule
//        $auth->removeAllRules();
    }
}
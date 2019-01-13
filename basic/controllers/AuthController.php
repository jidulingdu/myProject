<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/13
 * Time: 13:41
 */

namespace app\controllers;


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
        //添加角色到用户


    }
}
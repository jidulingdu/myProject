<?php
namespace app\modules\admin\controllers;
use app\modules\admin\models\Rbac;
use yii\web\Controller;
use \yii\data\ActiveDataProvider;
use \yii\db\Query;


class RoleController extends Controller
{
    public function actionIndex(){
        $auth = \Yii::$app->authManager;
        $data = new ActiveDataProvider([
            'query'=>(new Query)->from($auth->itemTable)->where('type=1')->orderBy('created_at desc'),
            'pagination'=>['pageSize'=>5]
        ]);
        return $this->render('index',['dataProvider'=>$data]);
    }
    public function actionAssignitem($name){
        $name = htmlspecialchars($name);
        $auth = \Yii::$app->authManager;
        $parent = $auth->getRole($name);

        if(\Yii::$app->request->isPost){
            $post = \Yii::$app->request->post();
            if(Rbac::addChild($post['children'],$name)){
                return $this->redirect('?r=admin/role/index');
            }
        }
        $children = Rbac::getChildrenByName($name);//通过角色查找子角色 和 节点
//        var_dump($children);die;
        $roles = Rbac::getOptions($auth->getRoles(),$parent);
        $permissions = Rbac::getOptions($auth->getPermissions(),$parent);
        return $this->render('assign',['parent'=>$name,'roles'=>$roles,'permissions'=>$permissions,'children' => $children]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/18
 * Time: 12:01
 */
namespace app\modules\admin\models;
use yii\db\ActiveRecord;

class Rbac extends ActiveRecord
{
    public static function getOptions($data,$parent){
        $return=[];
        foreach ($data as $obj){
            if(!empty($parent)&&$parent->name!=$obj->name&&\Yii::$app->authManager->canAddChild($parent,$obj)){
                $return[$obj->name] = $obj->description;
            }
            if(is_null($parent)){
                $return[$obj->name] = $obj->description;
            }
        }
        return $return;
    }
    public static function addChild($childen,$name){
        $auth = \Yii::$app->authManager;
        $itemObj = $auth->getRole($name);

        if(empty($itemObj)){
            return false;
        }

        $trans = \Yii::$app->db->beginTransaction();

        try{
            $auth->removeChildren($itemObj);
            foreach ($childen as $item){
                $role = $auth->getRole($item);
                $obj =empty($role) ? $auth->getPermission($item) : $role;
                $auth->addChild($itemObj,$obj);
            }
            $trans->commit();
            return true;
        }catch (\Exception $e){
            $trans->rollBack();
            return false;
        }
        return true;
    }

    public static function getChildrenByName($name)
    {
        if (empty($name)) {
            return [];
        }
        $return = [];
        $return['roles'] = [];
        $return['permissions'] = [];
        $auth = \Yii::$app->authManager;
        $children = $auth->getChildren($name); //是否有子角色或字节点--》auth_item_child  根据parent 查出child  通过child 查出auth_item name字段
        var_dump($children);die;

        if (empty($children)) {
            return [];
        }
        foreach ($children as $obj) {
            if ($obj->type == 1) {
                $return['roles'][] = $obj->name;
            } else {
                $return['permissions'][] = $obj->name;
            }
        }
        return $return;
    }
}
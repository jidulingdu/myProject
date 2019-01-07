<?php
namespace app\models;

use \yii\db\ActiveRecord;
class Article extends ActiveRecord{
    public static function tableName()
    {
        return 'article';
//        return '{{%article}}';//有前缀名时
    }
    public function getCategory()
    {
       $category = $this->hasOne('app\models\Category',['id'=>'cate_id']);
       return $category;
    }

    public function rules() //验证
    {
        return [
            ['title','required'],
            ['cate_id','number']
        ];
    }
}
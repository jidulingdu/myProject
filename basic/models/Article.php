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
            ['title','required','except'=>'rename'],
            ['title','required'],
            ['cate_id','number']
        ];


        //except  除了rename规则不验证   当操作提交数据保存前  可定义规则
//        例如：
//        $model = 模型::findOne(id);
//        $model->scenario = 'raname';
//        $model->字段 = 值;
//        if($model->save()){
//            ;;;;;;
//        }

    }
}
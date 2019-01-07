<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/24
 * Time: 14:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function getArticles()
    {
        $articles = $this->hasMany('app\models\Article',['cate_id'=>'id'])->asArray();
        return $articles;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/28
 * Time: 8:36
 */

namespace app\controllers;

header('content-type:text/html;charset=utf-8');

use app\models\Article;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\web\Controller;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $model = new Article();
        return $this->render('index',['model'=>$model]);
    }

    public function actionInfo()
    {

//        dd(request()->post());
        $title = request()->post()['Article']['title'];
        $cate_id = request()->post()['Article']['cate_id'];
        $article = new Article();
        $article->title = HtmlPurifier::process($title);
        $article->cate_id = Html::encode($cate_id);;
        $article->validate();
        if($article->hasErrors()){
            echo '提交失败';
            die;
        }else{
            $this->redirect(['article/index']);
        }
        $article->save();
    }

    public function actionList()
    {
        $sql = "select * from article where id=:id";
        $article = Article::findBySql($sql,[':id'=>1])->asArray()->all();
        $data = [
            'title'=>$article[0]['title'],
            'cate_id'=>$article[0]['cate_id']
        ];
        return $this->render('list',$data);
    }
}
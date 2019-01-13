<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/20
 * Time: 17:02
 */

namespace app\controllers;
header('content-type:text/html;charset=utf-8');

use app\models\Article;
use app\models\Category;
use yii\web\Controller;
use yii\web\Cookie;

class IndexController extends Controller
{
//    public $layout = 'test';//设置默认模板


    public function actionIndex()
    {

//        return $this->render('index');

//        $data = array(
//            'name'=>'zhangsan',
//            'age'=>18
//        );
//        p($data);
//       echo request()->get('id').'<br>';
//       echo request()->get('id',1); //默认是 1

//        getId();
//        $data = request()->userIP;
//        $data = [
//            'str' => 'hello index<script>alert(1)</script>',
//        ];
        //        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON

//        return $this->renderPartial('index',$data);//必须是数组形式
//        $id = request()->get('id');

        //查询数据
//        $sql ="select * from article where id=:id";
//        $r =Article::findBySql($sql,[':id'=>$id])->all();//占位符
//        $r = Article::find()->where(['id'=>5])->one();
//        $r = Article::find()->where(['cate_id'=>2])->orderBy('cate_id desc')->all();
//        $r = Article::find()->where(['cate_id'=>2])->limit(1)->all();
//        $r = Article::find()->where(['cate_id'=>2])->offset(1)->limit(1)->all();
//        $r = Article::find()->where(['id'=>5])->all();
//        $r = Article::find()->where(['id'=>5])->asArray()->all();
//        dd($r);
//        $r = Article::find()->where(['>','id',3])->all();
//        $r = Article::find()->where(['between', 'id', 3,5])->all();
//        $r = Article::find()->where(['like', 'title', '叙利亚']or['like','title','山西'])->all();
//        $r = Article::findOne(5);//针对主键
//        $r = Article::findOne(['cate_id'=>1]);//针对主键
//        $r = Article::findAll([3,4,5]);//针对主键
//        $r = Article::findAll(['cate_id'=>1]);
//        $r = Article::find()->all();
//        $r = Article::find()->asArray()->all();//返回数组格式
//        dd($r[1]['id']);
//$db = (new \yii\db\Query);
//        $r =$db->select('title')->from('article')->where('cate_id=:cate_id',['cate_id'=>1])->all();
//$db = \Yii::$app->db;
//        $r = $db->createCommand("select * from ".$db->tablePrefix."article")->queryAll();
//        $r = $db->createCommand("select * from ".$db->tablePrefix."article where id=:id")->bindValue(':id','2')->queryOne();
//        $r = $db->createCommand("select * from ".$db->tablePrefix."article where title=:title and cate_id=:cate_id")->bindValues([':title'=>'2018年日本出生人数创新低 死亡人数创二战后新高','cate_id'=>'3'])->queryOne();
//        dd($r);

//        1000条数据分段提取
//        foreach (Article::find()->batch(20) as $article){  //batch(int num) 每次分批数量
//            $data[] = $article;
//        }
//        dd($data);

        //添加数据 操作字段（属性） 需实例化
//        $article = new Article();
//        $article->title=2;
//        $article->num = 5;
//        echo $article->validate();//去调用 rules()
//        if($article->hasErrors()){//判断是否合法
//            echo 'error';
//            die;
//        }
//        $data = $article->insert();//同save()
//        $article->save();//同 insert()
//        $id = $article->attributes['id'];//获取最后插入id

        //修改数据
//            $article = Article::findOne(10);
//            $article->title = '美起诉两名"中国黑客" 中方敦促美方停止诬蔑';
//            $article->num = 4;
//            $article->update();//同save
//            Article::updateAll(['title'=>'this is new title'],['cate_id'=>2]);
//            $article->save();//同update

        //更新查看次数
//        $data = Article::updateAllCounters(['num'=>1]); //数据表中 每次页面刷新 num+1;
//        $data = Article::updateAllCounters(['num'=>1],['id'=>10]); //加入条件 id=1；

        //数据的删除
//        $article = Article::findOne(16);
//        $article = Article::find()->where(['id'=>12])->one(); //$article=>object

//        $article = Article::find()->where(['id'=>13])->all(); //$article=>array
//        $article[0]->delete();

//        Article::deleteAll();//全部清除
//        Article::deleteAll(['id'=>12]); //删除id=12的记录
//        Article::deleteAll('id=11');//删除id=11的记录
//        Article::deleteAll('id=:id',[':id'=>11]);//占位符 删除id=11的记录
//        Article::deleteAll('id>:id And num>:num',[':id'=>10,':num'=>10]);//占位符 删除id=10的记录 并且记录数大于10


//        $category = Category::find()->where(['name'=>'国际'])->one();
//        $articles = Article::find()->where(['cate_id'=>$category->attributes['id']])->all();


        //多表关联 一对多
//        $category = Category::findOne(3);
//        $articles = $category->hasMany('app\models\Article',['cate_id'=>'id'])->all();//第一种
//        $articles = $category->hasMany(Article::className(),['cate_id'=>'id'])->all(); //第二种 className() 过时
//        $articles = $category->getArticles(); //第三种
//        $articles = $category->articles; //第四种 首先调用__get()魔术方法->getArticles()->自动补充all(); 因而model类中可以不添加->all()方法
//return json_encode($articles);

        //多表关联 一对一

//        $article = Article::findOne(5);
//        $category = $article->hasOne('app\models\Category',['id'=>'cate_id'])->one();
//        $category = $article->hasOne(Category::className(),['id'=>'cate_id'])->one();//className() 过时
//        $category = $article->getCategory();
//        $category = $article->category;//首先调用__get()魔术方法->getCategory()->自动补充one(); 因而model类中可以不添加->one()方法

        //多表关联  一对多 全部查询
//        $articles = Article::find()->all(); //执行一次sql语句
//        foreach ($articles as $article){
//            $category[] = $article->category; //多次执行sql语句
//        }
        //多表关联  一对多 全部查询 优化
//        $articles = Article::find()->with('category')->asArray()->all();

        //控制器响应
//        $res = \Yii::$app->response;
//        $res->headers->add('location','http://www.baidu.com');//跳转百度
//        $this->redirect('http://www.baidu.com');//跳转百度
        //文件下载
//        $res->headers->add('content-disposition','attachment;filename="a.jpg"');
//        $res->sendFile('./a.jpg');//(相对于入口文件)发送给浏览器 浏览器保存下来

        //session
//        $session = \Yii::$app->session;
//        $session->open();//开启
//        $session->isActive;//判断是否开启session
//        $session->set('key','val');
//        $session['key'] = 'val';
//        $session->get('key');
//        $session['key'];
//        $session->remove('key');
//        unset($session['key']);

        //cookies
        //第一种方法
//        $cookie= new \yii\web\Cookie();
//        $cookie-> name = 'smister1';//cookie的名称
//        $cookie-> expire = time() + 3600;//存活的时间
//        $cookie -> httpOnly = true;//无法通过js读取cookie
//        $cookie-> value = 'cookieValue';//cookie 的值
//        \Yii::$app->response->getCookies()-> add($cookie);
        //第二种方法
//        $cookie= new\yii\web\Cookie([
//            'name' =>'smister',
//            'expire'=>time() + 3600,
//            'httpOnly'=> true,
//            'value' => 'cookieValue',
//        ]);
//        \Yii::$app->response->getCookies()-> add($cookie);
        //第三种
//        $cookies = \Yii::$app->response->cookies;
//        $cookie_data = array('name'=>'user','value'=>'zhangsi');
//        $cookies->add( new Cookie($cookie_data));
//            //取
//        $cookies =\Yii::$app->request->cookies;
//        echo $cookies->getValue('user',20);//如何键名不存在 输出默认值
        //判断一个 Cookie 是否存在
//        $cookie->has('smister');
//            //删
//        $cookies->remove('user');

        //获取缓存组件
//        $cache = \Yii::$app->cache;
        //写入缓存
//        $cache->madd(['key1'=>'val1',"key2"=>"val2"]); //添加多个
//        $cache -> mget(['key1','key2']);
//        $cache->add('key','val');
//        $cache->add('key','val2');//此语句不会执行 因为缓存种存在'key'
//        //修改缓存
//        $cache->set('key','value');
//        //读取缓存
//        echo $cache->get('key');
        //检测是否存在
//        echo $cache->exists('key');
//        //删除数据
//        $cache->delete('key');
//        //清空所有数据
//        $cache->flush();
        //有效期设置
//        $cache->add('key','val',15);//15秒
//        $cache->set('key','value',15);//15秒
//        echo $cache->get('key');
        //文件依赖
//        $dependency = new \yii\caching\FileDependency(['fileName'=>'a.txt']);//fileName 固定键
//        $cache->add('file_key','file_val',3000,$dependency);
//        var_dump($cache->get('file_key')); //如果文件内容发生改变 那么会失效 返回false

        //表达式依赖
//      http://yii.test/index.php?r=index/index&age=18
//        $dependency = new \yii\caching\ExpressionDependency(
//          ['expression'=>'\YII::$app->request->get("name")']
//        );

//        $cache->add('expression_key','expression_val',3000,$dependency);//此时以 age 为键 保存
//        var_dump($cache->get('expression_key'));
        //DB依赖
//        $dependency = new \yii\caching\DbDependency(
//          ['sql'=>'SELECT count(*) FROM test.article']
//        );
//        $cache->add('db_key','db_val',3000,$dependency);//此时以 age 为键 保存
//        var_dump($cache->get('db_key'));

        //页面片段缓存 views/index/index.php

        //片段缓存依赖 views/index/index.php

        //是否进行缓存 views/index/index.php

        //欠套缓存 views/index/index.php

        //http缓存
//        return $this->render('index');
//        return $this->redirect(['site/index']); //控制器/方法名
//        $this->redirect('http://www.baidu.com');//跳转百度
//        return $this->goHome();//回到根目录
//        return $this->goBack();//返回上一级
//        return $this->refresh();//刷新
//        http缓存试验
//        $content = file_get_contents('a.txt');
//        return $this->render('index',['new'=>$content]);
    }

//    public function behaviors()
//    {
    //整个页面缓存  优先执行
//        return [
//            [
//                'class' => 'yii\filters\PageCache',//设置页面缓存
//                'duration'=>1000,//设置缓存时间
//                'only'=>['index','test'],//指定缓存类方法
//                'dependency'=>[ //设置缓存依赖
//                    'class'=>'yii\caching\FileDependency',//设置文件依赖类
//                    'fileName'=>'a.txt'
//                ]
//            ]
//        ];
    //http 缓存 先判断修改日期 修改日期没有改变时 直接读写浏览器缓存 如果修改日期发生改变则判断内容 内容改变则重新计入缓存 没有改变读取浏览器缓存
//        return [
//            [
//                'class'=>'yii\filters\HttpCache', //设置http缓存类 服务器通知浏览器进行缓存
//                'lastModified'=>function(){ // 设置 日期匹配
//                    return filemtime('a.txt');
//                },
//                'etagSeed'=>function(){  //设置 内容匹配
//                    $fp =fopen('a.txt','r');
//                    $title = fgets($fp); //读取第一行
//                    fclose($fp);
//                    return $title;
//                }
//            ]
//        ];
//    }

    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
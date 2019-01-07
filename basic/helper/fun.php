<?php
/**
 * @param $val 数据类型
 */
function p($val){
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}

/**
 * @param $val 数据类型
 */
function dd($val){
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
    die;
}
/**
 * 封装请求
 */
function request(){
    return \Yii::$app->request;
}
/**
 * 封装获取id
 * get方法
 */
function getId(){
    if(!request()->get('id')){ //是否提交id
        echo request()->get('id',1); //没有提交id 默认设置1
    }else{
        echo request()->get('id'); //读取id值
    }
}
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = 'tem\ass'; //对应publishOptions
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
//    public $cssOptions = [
//        'noscript'=>true
//    ];
//    public $jsOptions = [
//      'condition'=>'lte IE9',
//      'position'=>'\yii\web\View::POS_HEAD'
//    ];
//    public $publishOptions = [
//      'only'=>[
//          'css',
//          'fonts',
//          'js'
//      ]
//    ];
}

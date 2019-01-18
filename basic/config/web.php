<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'defaultRoute' => 'article',//设置默认访问路径
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'true',
        ],
        'assetManager'=>[
            'class'=>'yii\web\AssetManager',
            'bundles' =>[
              'yii\web\JqueryAsset'=>[
                  'js'=>[
                    YII_ENV_DEV ? 'jquery.js':'jquery.min.js'
                  ],
              ],
                'yii\bootstrap\BootstrapAsset'=>[
                    'css'=>[
                        YII_ENV_DEV ? 'css/bootstrap.css':'css/bootstrap.min.css'
                    ]
                ],
                'yii\bootstrap\BootstrapPluginAsset'=>[
                    'css'=>[
                        YII_ENV_DEV ? 'js/bootstrap.js':'js/bootstrap.min.js'
                    ]
                ]
            ],
        ],
        //缓存
        'cache' => [
            'class' => 'yii\caching\FileCache',
//        'class'=>'yii\redis\Cache',
//            'redis'=>[
//                'hostname'=>'localhost',
//                'port'=>'6379',
//                'database'=>0,
//            ]
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'idParam'=>'__user',
            'enableAutoLogin'=>'true',
            'identityCookie'=>['name'=>'__user_identity','httpOnly'=>true]
//            'loginUrl'=>['/article/index'] // 默认返回地址
        ],
//        'admin'=>[ //自定义
//            'class'=>'yii\web\User', //让admin 成为user组件
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,//浏览器cookie 会产生一个_identity 会话结束后 再次登录 会利用identity进行登录
//            'idParam'=>'__admin', //防止前后台id 覆盖
//            'identityCookie'=>['name'=>'__admin_identity','httpOnly'=>true]
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'authManager'=>[
            'class'=>'yii\rbac\DbManager',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;

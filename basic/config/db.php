<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=test',
    'username' => 'root',
    'password' => 'admin',
    'charset' => 'utf8',
//    'prefix' =>'shop_',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
    //'schemaCache' => 'cache',
];

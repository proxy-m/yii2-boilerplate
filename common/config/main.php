<?php
return [
    'id' => 'app-full',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['log'],
    //'components' => [
    //    'cache' => [
    //        'class' => 'yii\caching\FileCache',
    //    ],
    //],
];

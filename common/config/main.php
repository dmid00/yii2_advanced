<?php

use dektrium\rbac\RbacWebModule;
use dektrium\user\Module;
use yii\caching\FileCache;

return [
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => RbacWebModule::class,
        ],
        'user' => [
            'class' => Module::class,
            'admins' => ['admin'],
            /*'modelMap' => [
                'LoginForm' => 'app\common\models\LoginForm'
            ],*/
        ],
    ],
];

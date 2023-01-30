<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => \dektrium\rbac\RbacWebModule::class,
        ],
        'user' => [
            'class' => dektrium\user\Module::class,
            'admins' => ['admin'],
        ],
    ],
];

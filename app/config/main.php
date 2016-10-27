<?php
/**
 * YesCMS
 * Copyright (c) 2016.
 */

date_default_timezone_set('PRC');

$db = require(__DIR__ . '/db.php');

return [
    'basePath' => dirname(__DIR__),
    'vendorPath' => '@root/vendor',
    'runtimePath'  => '@root/runtime',
    /*'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
        ],
    ],*/
    'timezone' => 'PRC',
    'language' => 'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            //'cachePath'=>'@root/runtime/cache', //todo default runtime/cache
        ],
        'schemaCache' => [
            'class' => 'yii\caching\FileCache',
            //'cachePath'=>'@root/runtime/cache',
            'keyPrefix'=>'scheme_'
        ],
        'security' => [
            'class' => 'core\components\Security',
        ],
	  	'assetManager' => [
			'basePath' => '@webroot/statics/assets',
			'baseUrl'=>'@web/statics/assets',
	      		/*'bundles' => [
	      		    'yii\web\JqueryAsset'=>[
	      		        'js'=>[]
	      		    ],
	          	// you can override AssetBundle configs here
	      	],*/
	      	'linkAssets' => false,
	      	// ...
	   ],
        'urlManager' =>[
            'class'=>'core\components\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
                //""=>"site/index",
                "post/<id:\d+>"=>"post/default/detail"
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.sina.com',			//使用163邮箱
                'username' => 'xxx@sina.com',	//你的163的帐号
                'password' => "xxx",				//你的163的密码
                'port' => '25',
                //'port'=>'465',
                //'encryption' => 'ssl',
            ],
            	
            'useFileTransport' => true,
            'messageConfig' => [
                'from' => ['xxx@sina.com' => 'Admin'],
                'charset' => 'UTF-8',
            ],
        ],
        'db' => $db,
        'log' => [
            'targets' => [
                'file' => [
                    'class' => 'app\modules\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    //'categories' => ['yii\'],
                  ],
                /*'db'=>[
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['warning', 'error'],
                    'except'=>['yii\web\HttpException:*', 'yii\i18n\I18N\*'],
                    'prefix'=>function () {
                        $url = !Yii::$app->request->isConsoleRequest ? Yii::$app->request->getUrl() : null;
                        return sprintf('[%s][%s]', Yii::$app->id, $url);
                    },
                    'logVars'=>[],
                    'logTable'=>'{{%system_log}}'
                ],*/
              ],
          ],
        "fileStorage" => [
            'class' => 'app\modules\attachment\components\FileStorage',
            'filesystem' => [
                'class' => 'creocoder\flysystem\LocalFilesystem',
                'path' => '@webroot/storage/uploads'
            ],
            'baseUrl' => '@web/storage/uploads'
        ],
        'config' => [ //动态配置
            'class' => 'core\components\Config',
            'localConfigFile' => '@root/app/config/main-local.php'
        ],
        'themeManager' => [
            "class" => 'app\modules\theme\components\ThemeManager'
        ],
        "composerConfigurationReader" => [
            'class' => 'core\components\ComposerConfigurationReader'
        ],
        'modularityService' => [
            'class' => 'app\modules\modularity\ModularityService',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],

    ],
];

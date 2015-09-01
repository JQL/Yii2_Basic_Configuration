<?php

$params = require(__DIR__ . '/params.php');

$config = [
  'id' => 'basic',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  // Internationalisation. Only change the sourceLanguage if you use a different language as the default
  'language' => 'en',
  'sourceLanguage' => 'en',
  // find the Browser's default language and set that initially
  'bootstrap' => [
    "app\components\InitialLanguageSelector",
  ],
  'components' => [
    'request' => [
// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
      'cookieValidationKey' => '<KEY HERE>',
    ],
    'cache' => [
      'class' => 'yii\caching\FileCache',
    ],
    'user' => [
      'identityClass' => 'app\models\User',
      'enableAutoLogin' => true,
    ],
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
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets' => [
        [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ],
      ],
    ],
    //  Internationalisation
    'i18n' => require (__DIR__ . '/i18n.php'),
    //  Remove index.php and the HEX from the URI
//  if you decide to use the long URL system, comment out this line and change .htaccess
    'urlManager' => require(__DIR__ . '/prettyurl.php'),
    // This makes Yii2 get the libraries from CDN which is usually quicker
// if you decide to use bootstrap and jquery from CDN, uncomment assetManager settings
    'assetManager' => require(__DIR__ . '/CDNLibraries.php'),
    // Database connection settings
    'db' => require(__DIR__ . '/db.php'),
  ],
  'params' => $params,
];

if (YII_ENV_DEV)
{
// configuration adjustments for 'dev' environment
  $config['bootstrap'][] = 'debug';
  $config['modules']['debug'] = 'yii\debug\Module';

  $config['bootstrap'][] = 'gii';
  $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;

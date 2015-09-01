<?php

/*
 * Copyright ©2015 JQL all rights reserved.
 * No part of this site may be reproduced without prior permission.
 * http://www.jql.co.uk
 */
/*
  Created on : 10-May-2015, 11:53:32
  Author     : John Lavelle
  Title      : CDNLibraries
 
  This makes Yii2 get the libraries from CDN which is usually quicker
  
 *   add the following lines to 'components' => [ ... in web.php (just above 'db' =>):
    // This makes Yii2 get the libraries from CDN which is usually quicker
    // if you decide not to use bootstrap and jquery from CDN, comment out assetManager settings
    'assetManager' => require(__DIR__ . '/CDNLibraries.php'),

 */
return [
  'bundles' => [
    // use bootstrap css from CDN
    'yii\bootstrap\BootstrapAsset' => [
      'sourcePath' => null, // do not use file from our server
      'css' => [
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css']
    ],
    // use bootstrap js from CDN
    'yii\bootstrap\BootstrapPluginAsset' => [
      'sourcePath' => null, // do not use file from our server
      'js' => [
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js']
    ],
    // use jquery from CDN
    'yii\web\JqueryAsset' => [
      'sourcePath' => null, // do not publish the bundle
      'js' => [
        '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
      ]
    ],
  ],
];
/* End of file CDNLibraries.php */
/* Location: ./config/CDNLibraries.php */
<?php

/*
 * Copyright ©2015 JQL all rights reserved.
 * No part of this site may be reproduced without prior permission.
 * http://www.jql.co.uk
 */
/*
  Created on : 15-May-2015, 19:25:06
  Author     : John Lavelle
  Title      : i18n
 * 
 * Create a Folder 'messages' and then a sub folder for each language
 * containing the file app.php
 * 
 * app.php contains the translations:
 return [
  'Welcome' => 'Bienvenue',
  'welcome' => 'bienvenue',
];

  See http://www.yiiframework.com/doc-2.0/guide-tutorial-i18n.html for info
  
 */
return [
  'translations' => [
    'app*' => [
      'class' => 'yii\i18n\PhpMessageSource',
      //'basePath' => '@app/messages',
      'sourceLanguage' => 'en-GB',
      'fileMap' => [
        'app' => 'app.php',
        'app/error' => 'error.php',
      ],
    ],
  ],
];
/* End of file i18n.php */
/* Location: ./messages/i18n.php */
<?php

/*
 * Copyright ©2015 JQL all rights reserved.
 * No part of this site may be reproduced without prior permission.
 * http://www.jql.co.uk
 */
/*
  Created on : 10-May-2015, 11:43:20
  Author     : John Lavelle
  Title      : prettyurl
  
  This makes Yii2 use the Pretty URL system

 *   add the following lines to 'components' => [ ... in web.php (just above 'db' =>):
    //  Remove index.php and the HEX from the URI
    //  if you decide to use the long URL system comment out this line and change .htaccess
     'urlManager' => require(__DIR__ . '/prettyurl.php'),

 * Note the following must be added to .htaccess:

# Used to create the "pretty URLs"
<IfModule mod_rewrite.c>
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php
</IfModule>

 */
//  Remove index.php and the HEX from the URI
return [
  'showScriptName' => false,
  'enablePrettyUrl' => true
];
/* End of file prettyurl.php */
/* Location: ./config/prettyurl.php */
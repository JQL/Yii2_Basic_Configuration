<?php

/*
 * Copyright ©2015 JQL all rights reserved.
 * No part of this site may be reproduced without prior permission.
 * http://www.jql.co.uk
 */
/*
  Created on : 16-May-2015, 12:34:50
  Author     : John Lavelle
  Title      : LanguageSelector
 * 
 * Get the Browser's default language and return it with a hypen not an underline
 * 
 * Note there seems to be a bug in Yii which defaults to en-US regardless of how
 * the browser is set. Therefore this workround will read the browser's actual
 * language setting if there isn't a cookie set.
 */

namespace app\components;

use yii\base\BootstrapInterface;
use yii\helpers\Html;

class InitialLanguageSelector implements BootstrapInterface
{

  public function bootstrap($app)
  {
    // Is there a cookie set with a language?
    $preferredLanguage = isset($app->request->cookies['language']) ? (string) $app->request->cookies['language'] : null;

    if (empty($preferredLanguage))
    {
      $preferredLanguage = HTML::encode(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']));
      if (empty($preferredLanguage))
      {
        $preferredLanguage = 'en';  // Default to general English
      }
      else
      {
        $preferredLanguage = str_replace('_', '-', $preferredLanguage);  //  Browser's Language with hypens not underlines
      }
    }
    $app->language = $preferredLanguage;
  }

}

/* End of file LanguageSelector.php */
/* Location: ./components/LanguageSelector.php */
<?php

/*
 * Copyright ©2023 JQL all rights reserved.
 * http://www.jql.co.uk
 */
/*
  Created on : 19-Nov-2023, 13:23:54
  Author     : John Lavelle
  Title      : LanguageHandler
 */

namespace app\components;

use yii\helpers\Html;

class LanguageHandler extends \yii\base\Behavior
{

	public function events()
	{
		return [\yii\web\Application::EVENT_BEFORE_REQUEST => 'handleBeginRequest'];
	}

	public function handleBeginRequest($event)
	{
		if (\Yii::$app->getRequest()->getCookies()->has('lang') && array_key_exists(\Yii::$app->getRequest()->getCookies()->getValue('lang'), \Yii::$app->params['languages']))
		{
      //  Get the language from the cookie if set
			\Yii::$app->language = \Yii::$app->getRequest()->getCookies()->getValue('lang');
		}
		else
		{
			//	Use the browser language - note: some systems use an underscore, if used, change it to a hyphen
			\Yii::$app->language = str_replace('_', '-', HTML::encode(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE'])));
		}
	}

}

/* End of file LanguageHandler.php */
/* Location: ./components/LanguageHandler.php */
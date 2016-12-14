<?php

// change the following paths if necessary
if(PHP_OS=='WINNT')
	$yii='C:/xampp/htdocs/yii/framework/yii.php';
else
	$yii='/var/www/yii/framework/yii.php';
	$yiic=dirname(__FILE__).'/../../../../../var/www/bensonwu13.github.io/yii/framework/yiic.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
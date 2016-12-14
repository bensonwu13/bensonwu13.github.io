<?php

// change the following paths if necessary
if(PHP_OS=='WINNT')
	$yiic='C:/xampp/htdocs/yii/framework/yiic.php';
else
	$yiic=dirname(__FILE__).'/../../../../../var/www/bensonwu13.github.io/yii/framework/yiic.php';
$config=dirname(__FILE__).'/config/console.php';

require_once($yiic);

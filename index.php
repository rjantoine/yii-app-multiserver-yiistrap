<?php

switch ($_SERVER['SERVER_NAME']) {
    case "local.server": // local server address
        $yii=dirname(__FILE__).'/../yii/framework/yii.php';
        $config=dirname(__FILE__).'/protected/config/server_local.php';
        break;
    case "www.yoursite.com": // production site
        $yii=dirname(__FILE__).'/../../yii/framework/yii.php';
        $config=dirname(__FILE__).'/protected/config/server_production.php';
        break;
}

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

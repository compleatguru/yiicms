<?php
date_default_timezone_set('Asia/Singapore');

$yii=dirname(__FILE__).'/../yii/framework/yii.php';
if (!file_exists(dirname(__FILE__) . '/protected/config/db.php')) {
    $config = 'install.php';
} elseif ($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    define('YII_DEBUG', true);
    define('YII_TRACE_LEVEL', 9);
    $config = 'dev.php';
} else {
    $yii=dirname(__FILE__).'/../yii/framework/yii.php';
    $config = 'production.php';
}
require_once($yii);
Yii::createWebApplication(dirname(__FILE__) . '/protected/config/' . $config)->run();

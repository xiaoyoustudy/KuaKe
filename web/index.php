<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
/*
for test of process of application framework. set to false when finish this test.
function testProcess() in BaseYii use YII_DEBUG_YB
*/
defined('YII_DEBUG_YB') or define('YII_DEBUG_YB',true);
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/web.php');
Yii::testProcess(__METHOD__);
(new yii\web\Application($config))->run();
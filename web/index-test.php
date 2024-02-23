<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1', '172.21.0.1'])) {
    die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../frontend/vendor/autoload.php';
require __DIR__ . '/../frontend/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../frontend/config/web.php';

(new yii\web\Application($config))->run();

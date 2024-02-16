<?php

require __DIR__ . '/../frontend/vendor/autoload.php';
require __DIR__ . '/../frontend/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../frontend/config/web.php';

(new yii\web\Application($config))->run();

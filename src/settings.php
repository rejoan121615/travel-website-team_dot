<?php

//    store folder path inside the variable
define('SRC_FOLDER', __DIR__);
define('ROOT', dirname(SRC_FOLDER));
define('ADMIN_FOLDER', ROOT . '/public/admin/');
define('ASSET_FOLDER', ROOT . '/public/assets/');

require_once 'template.php';


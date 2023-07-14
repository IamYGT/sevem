<?php
// HTTP
define('HTTP_SERVER', 'http://www.sevem.com.tr/');

// HTTPS
define('HTTPS_SERVER', 'https://www.sevem.com.tr/');

// DIR
define('DIR_APPLICATION', '/var/www/vhosts/sevem.com.tr/httpdocs/catalog/');
define('DIR_SYSTEM', '/var/www/vhosts/sevem.com.tr/httpdocs/system/');
define('DIR_IMAGE', '/var/www/vhosts/sevem.com.tr/httpdocs/image/');
define('DIR_STORAGE', '/var/www/vhosts/sevem.com.tr/httpdocs/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'sevem_db');
define('DB_PASSWORD', '5Fog%18n');
define('DB_DATABASE', 'sevem_db');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
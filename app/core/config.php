<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DBNAME', 'hencan'); // localhost host database name
    define('DBHOST', 'localhost'); // localhost host host name
    define('DBUSER', 'root'); // localhost host user name
    define('DBPASS', ''); // localhost host password name
    define('DBDRIVER', '');
    /** get document root for localhost */
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'projects/hencan');
    $THIS_FILE = str_replace('\\', '/', __File__);
    $DOC_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $ROOT =  str_replace(array($DOC_ROOT, "app/core/config.php"), '', $THIS_FILE);
    define("DEBUG", true);
} else {
    define('DBNAME', 'hencangr_hencan'); // real server host database name
    define('DBHOST', 'localhost'); // real server host host name
    define('DBUSER', 'hencangr_francis'); // real server host user name
    define('DBPASS', 'Frajosan97@001'); // real server host password name
    define('DBDRIVER', '');
    /** get document root for online server */
    $ROOT = str_replace($_SERVER['SCRIPT_URL'], '/', $_SERVER['SCRIPT_URI']);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . '/');
    define("DEBUG", false);
}

<?php

//===============================================
// KISSCMS Settings (please configure)
//===============================================
define('BACKEND', realpath("../") );
define('APP_PATH', realpath("../").'/app/'); //with trailing slash pls
define('VIEW_PATH',realpath("../").'/app/views/'); //with trailing slash pls
define('TEMPLATE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/templates/'); //with trailing slash pls
define('ASSETS_PATH','assets/'); //with trailing slash pls
define('DB_PATH', realpath("../").'/db/data.sqlite'); //with trailing slash pls

define('WEB_DOMAIN','http://'.$_SERVER['SERVER_NAME']); //with http:// and NO trailing slash pls
//define('WEB_FOLDER','/'); //with trailing slash pls
define('WEB_FOLDER','/index.php/'); //use this if you do not have mod_rewrite enabled

define('DEFAULT_ROUTE','main');
define('DEFAULT_ACTION','index');

define('DATABASE_FILE', DB_PATH);


//===============================================
// Website Info
//===============================================
$GLOBALS['config']['sitename']="KISSCMS";
$GLOBALS['config']['username']="admin";
$GLOBALS['config']['password']="admin";


//===============================================
// Debug
//===============================================
ini_set('display_errors','On');
error_reporting(E_ALL);



?>
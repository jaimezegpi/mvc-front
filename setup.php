<?php 
/* ------ DB SETUP*/
define('DB_STATUS', false);// switch = true or false  
define('DB_CON_FILE', 'sql.php');
define('DB_HOST', 'localhost');
define('DB_NAME', 'ssss');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_PREFIX', 'db_');

/* ------ INTERNAL KEYS*/
define('SECURITY_KEY', '123456');
define('SECURITY_SESSION_KEY', 'MVC');

// ------ GENREAL SETUP
define('SETUP_MODE', 'develop');
define('SETUP_SHOW_ERROR', true);
define('SETUP_SHOW_PATH', false);
define('SETUP_SHOW_CONSOLE', true);
define('SETUP_THEME_PATH', 'view/default/');
define('SETUP_THEME_ABS_PATH', baseUrl().SETUP_THEME_PATH);

define('SETUP_THEME_DEFAULT_PAGE', 'home.php');
define('SETUP_RENDER_ALL_REQUEST', true);
define('SETUP_BASEURL', baseUrl() );
define('SETUP_DEFAULT_LAN', 'en' );
if ( !isset( $_SESSION[ 'SETUP_LANG_'.session_id() ] ) ) {
	$_SESSION[ 'SETUP_LANG_'.session_id() ] = SETUP_DEFAULT_LAN;
}

/*LOAD LANGUAGE*/
if ( file_exists('lang/'.$_SESSION[ 'SETUP_LANG_'.session_id() ].'.php') ){ require('lang/'.$_SESSION[ 'SETUP_LANG_'.session_id() ].'.php'); }else{ exit($mvc_lang_error['file_not_exists'].' lang/'.$_SESSION[ 'SETUP_LANG_'.session_id() ].'.php'); }

if (!defined('SECURITY_KEY') ){ exit($mvc_lang_error['security_key']); }
if(SETUP_SHOW_PATH){ developMode(__FILE__);}

/* DEVELOPER ON */
function developMode($path)
{
    if(SETUP_SHOW_PATH)
    {
       echo "<h6>{".$path."}</h6>";
    }
}

/*
Get current Base_url 
*/
function baseUrl(){
        $php_self_explode = explode("/", $_SERVER['PHP_SELF']);
        $php_self_path = "";
        for ($i=0; $i < count($php_self_explode)-1 ; $i=$i+1) { 
            $php_self_path.=$php_self_explode[$i].'/';
        }
        return $php_self_path;
}
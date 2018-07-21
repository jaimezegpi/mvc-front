<?php

/*
Get browser user client
*/
function getUserBrowser()
{
    $useragent = $_SERVER ['HTTP_USER_AGENT'];  
    return $useragent;
}

/*
Clean Basic Input Text
*/
function cleanInput($input) 
{
    $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
    $output = preg_replace($search, '', $input);
    return $output;
}

/*
Sanitize Basic Input Text
*/
function sanitize($input) {
    if (is_array($input)) {
       foreach($input as $var=>$val) {
           $output[$var] = sanitize($val);
       }
    }else{
       if (get_magic_quotes_gpc()) {
           $input = stripslashes($input);
       }
       $input  = cleanInput($input);
       $output = mysql_real_escape_string($input);
    }
    return $output;
}

/*
Clean Url
*/
function cleanViewUrl($current_view){
  $current_view = str_replace("..", "_", $current_view);
  $current_view = str_replace("./", "", $current_view);
  $current_view = str_replace("/", "", $current_view);
  $current_view = cleanInput($current_view);
  $current_view = strtolower($current_view);
  return $current_view;
}

/*
Get Head.php in theme folder
*/
function get_head(){
  global $mvc_lang_error;
  if ( file_exists(SETUP_THEME_PATH."head.php") ) { require( SETUP_THEME_PATH."head.php" ); }else{ exit(  $mvc_lang_error['file_not_exists']." head.php" ); }
}

/*
Get Header.php in theme folder
*/
function get_header(){
  global $mvc_lang_error;
  if ( file_exists(SETUP_THEME_PATH."header.php") ) { require( SETUP_THEME_PATH."header.php" ); }else{ exit(  $mvc_lang_error['file_not_exists']." header.php" ); }
}

/*
Get Footer.php in theme folder
*/
function get_footer(){
  global $mvc_lang_error;
  if ( file_exists(SETUP_THEME_PATH."footer.php") ) { require( SETUP_THEME_PATH."footer.php" ); }else{ exit(  $mvc_lang_error['file_not_exists']." footer.php" ); }
}

/*
Render Console
*/
function get_console(){
    if (SETUP_SHOW_CONSOLE){ 
      global $event, $error;
      ?>
      <div class="log_console">
      <p>[Event Console]</p>
      <pre>
      <?php
        if (defined('SETUP_SHOW_ERROR'))
        {
          foreach ($event as $key => $value) {
            echo "<p>".$value."</p>";
          }
          foreach ($error as $key => $value) {
            echo "<p>".$value."</p>";
          }
        }
      ?>
      </pre>
      <p class="log_console_date"><?php echo date('Y-m-d H:i:s'); ?></p>
      </div>
    <?php } 
}
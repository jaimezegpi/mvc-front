<?php 
if (!defined('SECURITY_KEY') ){ exit($mvc_lang_error['security_key']); }
if(SETUP_SHOW_PATH){ developMode(__FILE__);}
?>
		<title>BASIC MVC </title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo SETUP_THEME_ABS_PATH; ?>css/main.css?random=<?php echo rand(10,100);?>" >
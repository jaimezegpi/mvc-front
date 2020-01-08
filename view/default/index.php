<?php
if (!defined('SECURITY_KEY') ){ exit($mvc_lang_error['security_key']); }
if(SETUP_SHOW_PATH){ developMode(__FILE__);}
$random = rand(100,999);
//LAYOUT
?>
<?php get_head(); ?>

			<!-- CONTENT INI -->
			<main class="content_body custom_main_container">

				<?php
				if ( file_exists("controller/view.php") )	{ require( "controller/view.php" ); }else{ exit( $mvc_lang_error['file_not_exists']." controller/view.php"); }
				?>
				
			</main>

<?php get_footer();	?>
<?php
if (!defined('SECURITY_KEY') ){ exit($mvc_lang_error['security_key']); }
if(SETUP_SHOW_PATH){ developMode(__FILE__);}
//Footer
?>

			<!-- FOOTER INI -->
			<footer class="content_footer custom_container">
				<h6><a mailTo="jaimezegpi@yahoo.es">jaimezegpi@yahoo.es</a></h6>
				<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
				<script src="<?php echo SETUP_THEME_ABS_PATH; ?>js/function.js"></script>
			</footer>

<?php get_console(); ?>

		</content>

	</body>
</html>
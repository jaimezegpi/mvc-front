<?php
/* This code needed in all your pages*/
if (!defined('SECURITY_KEY') ){ exit($mvc_lang_error['security_key']); }
if(SETUP_SHOW_PATH){ developMode(__FILE__);}
?>
<div class="manual-body">
	<h1 ><a name="index">MANUAL</a></h1>
	<div class="content_left">
		<ul>
			<li><a href="#structure">Structure</a></li>
			<li><a href="#activity_add_new_page">Activity: Add a new Page or View</a></li>
			<li><a href="#activity_add_new_theme">Activity: Add a new Theme</a></li>
			<li><a href="#activity_query_database">Activity: Query Database</a></li>
			
		</ul>		
	</div>


	<fieldset>
		<legend><a name="structure">Structure</a></legend>
		<p class="content_text">This is a basic MVC layout.</p>
		+ Your Root Folder
		<ul>
			<li><h3>model</h3>
			<p class="content_text" >In this folder you found the model or database class you can use for your project. Mysql class are include by default. But you can use any database class like Oracle.</p>
			</li>
			<li><h3>view</h3>
			<p class="content_text">Here you found all elements for FRONT end develop, is a Client Side folder separate by "themes", you can have many themes as you like.</p>
				<ul>
					<li >default<p class="content_text">Default theme design.</p></li>
				</ul>
			</li>
			<li><h3>controller</h3>
			<p class="content_text">This is the "Controller" folder, all your Server Side Scripts go here.</p>
			</li>
			<li><h3>lang</h3>
			<p class="content_text">This is the Language Folder</p>
			</li>
			<li>index.php</li>
			<li>setup.php<p class="content_text">This is the most important file. here you can mosd the "theme" folder for  your custom develop.</p></li>
			<li>.htaccess<p class="content_text">Very usefull here you found security configuraction for your server.</p></li>
		</ul>
		<p class="allign_right"><a href="#index">GO 2 INDEX</a></p>
	</fieldset>
	<br>
	<fieldset>
		<legend><a name="activity_add_new_theme">Activity: add new Themplate</a></legend>
		<p class="content_text">This activity is relatively straightforward.</p>
		<ul>
			<li>
				1. Create a new folder named "test" in "view" folder
				<p class="content_text">/view/test</p>
			</li>
			<li>
				2. Set theme in config.php
				<p class="content_text">File config.php you can find in root.</p>
				<p class="content_text">This : define('SETUP_THEME_PATH', 'view/default/');</p>
				<p class="content_text">For : define('SETUP_THEME_PATH', 'view/test/');</p>
			</li>
			<li>
				3. Create a file named index.php
				<p class="content_text">Here is your front end. upload your css, js, etc...</p>
			</li>

			<p class="allign_right content_text"><a href="#index">GO 2 INDEX</a></p>
		</ul>
	</fieldset>

	<br>
	<fieldset>
		<legend><a name="activity_add_new_page">Activity: add new Page or View</a></legend>
		<p class="content_text">Is very simply, In your theme folder ( view/yourTheme/ ) create a file named as your view ex: service.php</p>
		<ul>
			<li>
				1. In your theme folder ( view/yourTheme/ ) create a file named as your view ex: service.php
				<p class="content_text">Custom Theme is set in config.php</p>
			</li>
			<li>
				2. Now you can access like this http://www.yourdom.com/service/
			</li>
			<p class="allign_right"><a href="#index">GO 2 INDEX</a></p>
		</ul>
	</fieldset>

	<br>
	<fieldset>
		<legend><a name="activity_query_database">Activity: Query Database. </a></legend>
		<p class="content_text">First active Database in setup.php and add respective credentials.</p>
		<ul>
			<li>
				1. First active Use of Database in setup.php and add respective credentials ( DB_NAME, DB_USER, DB_PASSWORD, ETC... ).<br>
				define('DB_STATUS', true);// switch to true  <br>
				<code>
        $sql=new db();<br>
        $sql->sql_open();<br>
        $query="SELECT * FROM tablename WHERE id = '".mysql_real_escape_string($_GET['id'])."'";<br>
        $mvc_response = $sql->sql_query_read($query);<br>
        $sql->sql_close();<br>
        // This return a array. you can walk using a basic foreach.<br>
				</code>
			</li>
			<li>
				2. IMPORTANT!! always use mysql_real_escape_string( $value ).<br>
			</li>
			<li>
				3. IMPORTANT!! always validate your fields in FORMS.<br>
			</li>
			<p class="allign_right"><a href="#index">GO 2 INDEX</a></p>
		</ul>
	</fieldset>

</div>

<div class="content_left">
	<h3>Template Information</h3>
	Url present view	: <?php if (isset($current_view)){echo $current_view;} ?><br>
	Show Base Url 	: <?php echo baseUrl(); ?> <br/>
	Show Theme Url 	: <?php echo SETUP_THEME_PATH; ?> <br/>
	user Browser 	: <?php echo getUserBrowser(); ?> <br/>
	Session ID 		: <?php echo session_id(); ?> <br/>
	<?php	if ( isset($template_var_demo) ){echo $template_var_demo;}	?>

	<h3>Change in Setup File</h3>
	Show Error 		: <?php if( SETUP_SHOW_ERROR ) {echo " Enable";}else{echo " NOT Enable";} ?> <br/>
	Show File Path 	: <?php if( SETUP_SHOW_PATH ) {echo " Enable";}else{echo " NOT Enable";} ?> <br/>
	Is Connected to Database : <?php if ( DB_STATUS ){echo "DataBase Enable".DB_STATUS;}else{echo "Not Enable";} ?> <br/>

	
</div>
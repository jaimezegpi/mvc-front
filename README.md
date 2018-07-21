# mvc-front
Basic MVC frame
<div class="manual-body">
	<h1 ><a name="index">MANUAL</a></h1>
	<div class="content_left">
		<ul>
			<li><a href="#structure">Structure</a></li>
			<li><a href="#activity_add_new_page">Activity: Add a new Page or View</a></li>
			<li><a href="#activity_add_new_theme">Activity: Add a new Theme</a></li>
		</ul>		
	</div>


	<div>
		<div><a name="structure">Structure</a></div>
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
	</div>
	<br>
	<div>
		<div><a name="activity_add_new_theme">Activity: add new Themplate</a></div>
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
	</div>

	<br>
	<div>
		<div><a name="activity_add_new_page">Activity: add new Page or View</a></div>
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
	</div>

</div>
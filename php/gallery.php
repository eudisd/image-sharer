<!DOCTYPE html>
<html lang='en'>
	<head>
		<title> Image Egami  </title>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<link rel='stylesheet' href='../css/general.css' type='text/css' />
		<link rel='shortcut icon' 
href='http://eudisduran.com/site/data/avatar.png' />
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
		<script src='../js/jq.js' type='text/javascript'></script>
		<script src='../js/script1.js' type='text/javascript'></script>
	</head>
	<body>
		<!--[IF IE]>
			<p style='text-align:center'> This site does now function
            properly in IE.  Please use a moder browser such as
            <a href='http://www.mozilla.com/en-US/firefox/firefox.html'>
            Mozilla Firefox</a> or <a href='http://google.com/chrome'>Google Chrome</a>
			</p>
		<![ENDIF]-->

	<div class='container'>
		<?php include_once('constants.php'); ?>
		<header>
			<a style='text-decoration: none; color: black;' href= <?php echo "${BASE}"; ?> <h3 
id='title'>  Image Egami   </h3></a>
			<center> <p> version: <?php echo $VERSION; ?> </p> </center>
		</header>
		<nav>
			<div id='nav_list'>
			  <form id='gal' method='GET' action='gallery.php'>
				<a class='nav_btn' href='#' onclick="document.getElementById('gal').submit()"> gallery </a>&nbsp;
				<a class='nav_btn' id='about_btn' href='#'> about </a>
			  </form>
			</div>
			<div id='about_box'>
				Simple image uploader written in HTML5, PHP, jQuery, JS, and MySQL.
			</div>
		</nav>
		<div id='content'>
	      <p>- Last 10 uploaded images -</p>
		  <?php
				include_once('database.php');
				$db = new DB();
				$db->opendb();
			
				$r = $db->q("SELECT link FROM Pictures LIMIT 10");
				while($row = mysql_fetch_assoc($r)){
					echo "<a href='${row['link']}'> <img src='${row['link']}' border='0' width='50' height='50' alt='pic'> </a>";
				}

				$db->closedb(); 

		   ?>
		</div>

		<footer>
			Copyright &copy; Eudis Duran, 2010
		</footer>
     </div>
	</body>
</html>

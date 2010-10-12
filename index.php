<!DOCTYPE html>
<html lang='en'>
	<head>
		<title> Image Egami  </title>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<link rel='stylesheet' href='css/general.css' type='text/css' />
		<link rel='shortcut icon' 
href='http://eudisduran.com/site/data/avatar.png' />
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
		<script src='js/jq.js' type='text/javascript'></script>
		<script src='js/script1.js' type='text/javascript'></script>
		<script type="text/javascript"> 
  			var _gaq = _gaq || [];
 		    _gaq.push(['_setAccount', 'UA-18210481-1']);
  			_gaq.push(['_trackPageview']);
 
  			(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = 
true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + 
'.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, 
s);
  			})();
		</script> 
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
		<?php include_once('php/constants.php'); ?>
		<header>
			<a style='text-decoration: none; color: black;' href= <?php echo "${BASE}"; ?> <h3 
id='title'>  Image Egami   </h3></a>
			<center> <p> version: <?php echo $VERSION; ?> </p> </center>
		</header>
		<nav>
			<div id='nav_list'>
			  <form id='gal' method='GET' action='php/gallery.php'>
				<a class='nav_btn' href='#' onclick="document.getElementById('gal').submit()"> gallery </a>&nbsp;
				<a class='nav_btn' id='about_btn' href='#'> about </a>
			  </form>
			</div>
			<div id='about_box'>
				Simple image uploader written in HTML5, PHP, jQuery, JS, and MySQL.
			</div>
		</nav>
		<div id='content'>
		  <form id='fileinput' enctype="multipart/form-data" method='POST' action='php/upload.php'>
			<!--<input id='textfield' type='text' size='20' />-->
			<input type='file' name='upload' id='upload'   />
			<input type='hidden' name='MAX_FILE_SIZE' value='200000' />
			<input type='submit' value='Upload!' />
		  </form>
		</div>

		<footer>
			Copyright &copy; Eudis Duran, 2010
		</footer>
     </div>
	</body>
</html>

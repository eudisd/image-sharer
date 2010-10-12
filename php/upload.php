<?php
	session_start();
	include_once('database.php');

	$db = new DB();
	
	$base = '';  // You must set your server's absolute path to the project's directory.

	$link_base = 'http://www.eudisduran.com/';

	$link = $link_base . 'img/data/' . basename($_FILES['upload']['name']);

	if($_FILES["upload"]["error"] > 0) echo "ERROR UPLOADING FILE!";

	else {
		$filename = basename($_FILES['upload']['name']);

		$target = $base . 'data/' . $filename;
		
		if(!move_uploaded_file($_FILES['upload']['tmp_name'], $target)){
			echo "Moving file failed!";
		}

		else {
			$db->opendb();
			$db->q("INSERT INTO Pictures VALUES('${link}', '${target}')");
			$db->closedb();

			$_SESSION['link'] =  $link;
			header('Location: picture.php');
		}

	}
	

?>

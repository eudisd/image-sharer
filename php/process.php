<?php include_once("constants.php");
      include_once('database.php');

if($_GET['t'] == 'accept'){
    
    $db = new DB();
    $db->opendb();
    
    $db->q("INSERT INTO Pictures VALUES('{$_GET['link']}', '{$_GET['location']}')");
    $db->q("DELETE FROM accept WHERE link = '{$_GET['link']}'");

    $db->closedb();
}

else if($_GET['t'] == 'deny') {

    $db = new DB();
    $db->opendb();
    
    $db->q("DELETE FROM accept WHERE link = '{$_GET['link']}'");

    $db->closedb();
}

else {

}


header("Location: accept.php");
?>

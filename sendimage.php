<?php
require('secure.php');
$username=$db->escape_string($_POST['username']);
$url=strip_tags($db->escape_string($_POST['img_url']));
if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
    header('Location: error.php?error=wu');
}
else{
	$result=$db->query("INSERT INTO images VALUES ('$username','$url')");
	if($result)
	{
		$_SESSION['flash']="Image Sent Successfully";
		header("Location: index.php");
	}
	else
		header("Location: error.php?error=im");
}

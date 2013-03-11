<?php
header("Content-Type: text/plain");

switch($_GET['error']){
	case 'nc':
		$msg="Not enough credits";
		break;
	case 'tc':
		$msg="Too many credits. We have an upper credit transfer limit of 10";
		break;
	case 'ic':
		$msg="Illegal number of credits";
		break;
	case 'wu':
		$msg="Wrong username. Maybe this is already taken";
		break;
	case 'wp':
		$msg="Wrong password entered";
		break;
	case 'nl':
		$msg="You are not logged in.";
		break;
	case 'im':
		$msg="Error in sending image";
		break;
	case 'wa':
		$msg ="Invalid URL";
		break;
	default:
		$msg="Unknown error occured";
}

echo $msg;
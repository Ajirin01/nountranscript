<?php
require_once("includes/initialize.php");
	
$content='eportal-home.php';
$view = (isset($_GET['eportal-page']) && $_GET['eportal-page'] != '') ? $_GET['eportal-page'] : '';
switch ($view) {
	case 'eportal' :
        $title="eportal";	
		$content='eportal-home.php';		
		break;
	// case 'course_registration' :
	//     $title="course_registration";	
	// 	$content ='eportal-home.php';
	// 	break;
	case 'admission_application' :
	    $title="admission_application";	
		$content = 'admission_application.php';		
		break;
	case 'profile' :
		$title="profile";	
		$content = 'eportal-home.php';		
		break;
	default :
	    $title="eportal";	
		$content ='eportal-home.php';		
}

require_once 'theme/frontendTemplate-eportal.php';
require_once 'includes/ID.php';
?>

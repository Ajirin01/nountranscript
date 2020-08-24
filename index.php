<?php
require_once("includes/initialize.php");
	
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Home";	
		$content='home.php';		
		break;
	case '2' :
	    $title="Profile";	
		$content ='profile.php';
		break;
	case '3' :
	    $title="Record";	
		$content = 'record.php';		
		break;

	case '4' :
	    $title="subject";	
 		$content ='studentsubject.php';		
		break;
				
     case '5' :
	    $title="transcript";	
		$content='trans.php';
		break;	

	case '7' :
	    $title="Location";	
		$content ='sitemap.php';
		break;
	case '8' :
		$title="course_reg";	
		$content ='student/assignsubj.php';
		break;
	case '9' :
		$title="changepassword";	
		$content ='student/changepassword.php';
		break;
	default :
	    $title="Home";	
		$content ='home.php';		
}

require_once 'theme/frontendTemplate.php';
require_once 'includes/ID.php';
?>

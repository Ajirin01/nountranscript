<?php
/**
* Description:	The main class for Database.
* Author:		Joken Villanueva
* Date Created:	october 27, 2013
* Revised By:		
*/

//Database Constants test
// defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
// defined('DB_USER') ? null : define("DB_USER","root");		  //define our database user	
// defined('DB_PASS') ? null : define("DB_PASS","");			  //define our database Password	
// defined('DB_NAME') ? null : define("DB_NAME","transcript_db"); //define our database Name

//production configurations
defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
defined('DB_USER') ? null : define("DB_USER","nountran_nountran");		  //define our database user	
defined('DB_PASS') ? null : define("DB_PASS","4BApf62]uq[1YD");			  //define our database Password	
defined('DB_NAME') ? null : define("DB_NAME","nountran_transcript_db"); //define our database Name

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot =$_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'includes/config.php'), '', $thisFile);
$srvRoot  = str_replace('config/config.php','', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>

<?php 
require_once ("../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	}
	
function doInsert(){
		
if (isset($_POST['savefaculty'])){

	if ($_POST['name'] == "" OR $_POST['address'] == "" OR $_POST['email'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$inst = new Instructor();
		$name   		= $_POST['name'];
		$address	 	= $_POST['address'];
		$Gender			= $_POST['Gender'];
		$civilstats 	= $_POST['civilstats'];
		$specialization = $_POST['specialization'];
		$email 			= $_POST['email'];
		$empStats 		= $_POST['empStats'];	

		$user = new User();
		$acc_name		= $_POST['name'];
		$acc_username   = $_POST['email'];
		$acc_password 	= $_POST['pass'];
		$acc_type 		= 'Teacher';
		$resuser = $user->find_all_user($acc_name);
		
		
		if ($resuser >=1) {
			message("Account name already exist!", "error");
			redirect('add.php');
			// header('location: '.WEB_ROOT.'index.php');
		}else{


		$res = $inst->find_all_instructor($name);
				
			if ($res >=1) {
				message("Instructor name already exist!","error");
				check_message();
			}else{

				$inst->INST_FULLNAME		 = $name;
				$inst->INST_ADDRESS 		 = $address;
				$inst->INST_SEX 			 = $Gender;
				
				$inst->INST_STATUS 			 = $civilstats;
				$inst->SPECIALIZATION 		 = $specialization;
				$inst->INST_EMAIL 			 = $email;
				$inst->EMPLOYMENT_STATUS	 = $empStats;

				
				$user->ACCOUNT_NAME = $name;
				$user->ACCOUNT_USERNAME = $email;
				$user->ACCOUNT_PASSWORD = sha1($acc_password);
				$user->ACCOUNT_TYPE = $acc_type;
				
				//  $istrue = $user->create(); 
				//  if ($istrue == 1){
				//  	//message("New [". $acc_name ."] created successfully!", "success");
				//  	//redirect('index.php');
				 	
				//  }
			}
			// redirect('index.php');
			// header("location: ../../index.php");
			// exit;
			$istrueee = $inst->create(); 
			 if ($istrueee == 1){
			 	
			 	message("New Instructor created successfully!","success");
			 	redirect(WEB_ROOT.'admin/index.php');
			 }else{

				message("No Instructor created!","error");
				 // redirect(WEB_ROOT.'admin/index.php');
				 redirect('add.php');


			 }
		}	 

		
	}
}
}

?>
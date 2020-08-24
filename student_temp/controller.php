<?php 
require_once ("../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
		doInsert();
		break;
	case 'edit' :
		doEdit();
		break;
	case 'editpass' :
		doEditPass();
		break;
	case 'assign' :
		doAssignsubj();
		break;
	case 'delsubj' :
		doDelsubj();
		break;
	case 'enroll' :
		doEnroll();
		break;
	case 'delsy' :
		doDelsy();
	break;
	case 'import' :
		doimport();
	break;

	}

	function doimport(){
		if(isset($_POST["Import"])){
		//require_once("includes/initialize.php");

		echo $filename=$_FILES["file"]["tmp_name"];
		//echo $ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));


		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	            //print_r($emapData);
	            global $mydb;
	            $mydb->setQuery("INSERT into tblstudent values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]')");
	          	$mydb->executeQuery();
	           	
	         }
	         fclose($file);
	         message("CSV File has been successfully Imported","info");
			 redirect('index.php?view=import');
		         
		 }
		 else
		 	message("Invalid File:Please Upload CSV File","error");
			redirect('index.php?view=import');
		 }
	}

	function doDelsy(){
		$studentId=$_GET['studentId'];
		
		  @$id=$_POST['selector'];
		  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$sy = new Schoolyr();
				$sy->delete($id[$i]);
			}
					message("Schoolyear is successfully deleted!","info");
					redirect('index.php?view=view&studentId='.$studentId.'');
		}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&studentId='.$studentId.'');
		}
	}
function doEnroll(){
	if (isset($_POST['savestep1'])){
				
 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				 $idno  =  $_POST['idno'];
				 $Status = $_POST['Status'];
				 $course = $_POST['course'];
				 $ay 	 = $_POST['ay'];
				 $Semester = $_POST['Semester'];

				$sy = new Schoolyr();
				$sy->AY = $ay;
				$sy->STATUS = $Status;
				$sy->SEMESTER = $Semester;
				$sy->COURSE_ID = $course;
				$sy->IDNO = $idno;
				$sy->DATE_RESERVED = $created;
				$sy->DATE_ENROLLED  = $created;
				// echo json_encode($sy);
				// exit;
				 $istrue = $sy->create();
				//  echo json_encode($istrue);
				//  exit;
			 if ($istrue == 1){
			 	
			 	message("Course has been successfully registered! Assign now the student's subjects.","success");
			 	// check_message();
			 	redirect('../index.php?page=3&studentId='.$idno.'');
				
			 }else{
				message("Course has been could not be successfully registered! Assign now the student's subjects.","error");
				// check_message();
				redirect('../index.php?page=3&studentId='.$idno.'');
			 }



			}
}	
function doInsert(){
		
	//primary Details
	$IDNO  = $_POST['idno'];
	$FNAME = $_POST['fName'];
	$LNAME = $_POST['lName'];
	$MNAME = $_POST['mName'];
	$SEX   = $_POST['gender'];
	$BDAY  = $_POST['bday'];
	$BPLACE= $_POST['bplace'];
	$STATUS= $_POST['status'];
	$AGE   = $_POST['age'];
	$NATIONALITY = $_POST['nationality'];
	$RELIGION = $_POST['religion'];
	$CONTACT_NO = $_POST['contact'];
	$HOME_ADD = $_POST['home'];
	$EMAIL   = $_POST['email'];
	$natid   = $_POST['natid'];
	$fac   = $_POST['fac'];


	$student = new Student();
	//$student->S_ID				= "null";
	$student->IDNO 				=	$IDNO;
	$student->LNAME				=	$LNAME;
	$student->FNAME				=	$FNAME;
	$student->MNAME				=	$MNAME;
	$student->SEX				=	$SEX;
	$student->BDAY				=	$BDAY;
	$student->BPLACE			=	$BPLACE;
	$student->STATUS			=	$STATUS;
	$student->AGE				=	$AGE;
	$student->NATIONALITY		=	$NATIONALITY;
	$student->RELIGION			=	$RELIGION;
	$student->CONTACT_NO		=	$CONTACT_NO;
	$student->HOME_ADD			=	$HOME_ADD;
	$student->EMAIL 			=	$EMAIL;
	$student->NAT_ID 			=	$natid ;
	$student->FAC 				=	$fac ;


	//course infor
	/*$course	= $_POST['course'];
	$semester = $_POST['semester'];
	$ay		= $_POST['AY'];
	$sy = new Schoolyr();
	$sy->AY 		= $ay;
	$sy->SEMESTER 	= $semester;
	$sy->COURSE_ID	= $course;
	$sy->IDNO 		= $IDNO;*/
	/*if ($istrue) {
		output_message('course info successfully added!');
		redirect ('newstudent.php');
	}

	*/  
	//secondary Details
	$FATHER 			= $_POST['father'];
	$FATHER_OCCU 		= $_POST['fOccu'];
	$MOTHER 			= $_POST['mother'];
	$MOTHER_OCCU 		= $_POST['mOccu'];
	$BOARDING 			= $_POST['boarding'];
	$WITH_FAMILY 		= $_POST['withfamily'];
	$GUARDIAN 			=  $_POST['guardian'];
	$GUARDIAN_ADDRESS 	=  $_POST['guardianAdd'];
	$OTHER_PERSON_SUPPORT = $_POST['otherperson'];
	$ADDRESS 			=  $_POST['otherAddress'];

	$studdetails = new Student_details();
	$studdetails->FATHER				=	$FATHER;
	$studdetails->FATHER_OCCU			=	$FATHER_OCCU;
	$studdetails->MOTHER				=	$MOTHER;
	$studdetails->MOTHER_OCCU			=	$MOTHER_OCCU;
	$studdetails->BOARDING			    =	$BOARDING;
	$studdetails->WITH_FAMILY			=	$WITH_FAMILY;
	$studdetails->GUARDIAN			    =	$GUARDIAN;
	$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
	$studdetails->OTHER_PERSON_SUPPORT	=	$OTHER_PERSON_SUPPORT;
	$studdetails->ADDRESS				=	$ADDRESS;
	$studdetails->IDNO 				    =	$IDNO;

	//  
	/*if ($istrue) {
		output_message('Seccondary details successfully added!');
		redirect ('newstudent.php');
	}
	*/

	//requirements
	$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
	$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
	$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
	$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
	$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

	$requirements = new Requirements();

	$requirements->NSO				 		= $nso;
	$requirements->BAPTISMAL		   		= $bapt;
	$requirements->ENTRANCE_TEST_RESULT		= $entrance;
	$requirements->MARRIAGE_CONTRACT        = $mir_contract;
	$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
	$requirements->IDNO 			   		= $IDNO;
	//$istrue = $requirements->create(); 
	/*if ($istrue) {
		output_message('Student requirements successfully added!');
		redirect ('newstudent.php');
	} 
	*/

	if ($IDNO == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=add');
	}elseif ($LNAME == "") {
		message('Last Name is required!', "error");
		redirect ('index.php?view=add');
	}elseif ($FNAME == "") {
		message('First Name is required!', "error");
		redirect ('index.php?view=add');
	}elseif ($MNAME == "") {
		message('Middle Name is required!', "error");
		redirect ('index.php?view=add');
	}elseif ($EMAIL == "") {
		message('Email address is required!', "error");
		redirect ('index.php?view=add');
		
	}else{

		$student->create(); 
		#$sy->create();  
		$studdetails->create();
		$requirements->create(); 
		message('New student addedd successfully!', "success");
		redirect('index.php?view=list');	


	}

}
function doEdit(){
	if (isset($_POST['submit'])){	

	$IDNO  = $_POST['idno'];
	$ADMISSION_STATUS  = $_POST['admission_status'];
	$LNAME = $_POST['lName'];
	$FNAME = $_POST['fName'];
	$MNAME = $_POST['mName'];
	$SEX   = $_POST['gender'];
	$BDAY  = $_POST['bday'];
	$BPLACE= $_POST['bplace'];
	$STATUS= $_POST['status'];
	$AGE   = $_POST['age'];
	$NATIONALITY = $_POST['nationality'];
	$RELIGION = $_POST['religion'];
	$CONTACT_NO = $_POST['contact'];
	$HOME_ADD = $_POST['home'];
	$EMAIL   = $_POST['email'];
	$natid   = $_POST['natid'];
	// $fac   = $_POST['fac'];

	$student = new Student();
	//$student->S_ID				= "null";
	$student->ADMISSION_STATUS 	=	$ADMISSION_STATUS;
	$student->IDNO 				=	$IDNO;
	$student->LNAME				=	$LNAME;
	$student->FNAME				=	$FNAME;
	$student->MNAME				=	$MNAME;
	$student->SEX				=	$SEX;
	$student->BDAY				=	$BDAY;
	$student->BPLACE			=	$BPLACE;
	$student->STATUS			=	$STATUS;
	$student->AGE				=	$AGE;
	$student->NATIONALITY		=	$NATIONALITY;
	$student->RELIGION			=	$RELIGION;
	$student->CONTACT_NO		=	$CONTACT_NO;
	$student->HOME_ADD			=	$HOME_ADD;
	$student->EMAIL 			=	$EMAIL;
	$student->NAT_ID 			=	$natid;

	$FATHER 			= $_POST['father'];
	$FATHER_OCCU 		= $_POST['fOccu'];
	$MOTHER 			= $_POST['mother'];
	$MOTHER_OCCU 		= $_POST['mOccu'];
	$BOARDING 			= $_POST['boarding'];
	$WITH_FAMILY 		= $_POST['withfamily'];
	$GUARDIAN 			=  $_POST['guardian'];
	$GUARDIAN_ADDRESS 	=  $_POST['guardianAdd'];
	$OTHER_PERSON_SUPPORT = $_POST['otherperson'];
	$ADDRESS 			=  $_POST['otherAddress'];

	$studdetails = new Student_details();
	$studdetails->FATHER				=	$FATHER;
	$studdetails->FATHER_OCCU			=	$FATHER_OCCU;
	$studdetails->MOTHER				=	$MOTHER;
	$studdetails->MOTHER_OCCU			=	$MOTHER_OCCU;
	$studdetails->BOARDING			    =	$BOARDING;
	$studdetails->WITH_FAMILY			=	$WITH_FAMILY;
	$studdetails->GUARDIAN			    =	$GUARDIAN;
	$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
	$studdetails->OTHER_PERSON_SUPPORT	=	$OTHER_PERSON_SUPPORT;
	$studdetails->ADDRESS				=	$ADDRESS;
	$studdetails->IDNO 				    =	$IDNO;

	//  
	/*if ($istrue) {
		output_message('Seccondary details successfully added!');
		redirect ('newstudent.php');
	}
	*/

	//requirements
	$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
	$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
	$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
	$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
	$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

	$requirements = new Requirements();

	$requirements->NSO				 		= $nso;
	$requirements->BAPTISMAL		   		= $bapt;
	$requirements->ENTRANCE_TEST_RESULT		= $entrance;
	$requirements->MARRIAGE_CONTRACT        = $mir_contract;
	$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
	$requirements->IDNO 			   		= $IDNO;
	//$istrue = $requirements->create(); 
	/*if ($istrue) {
		output_message('Student requirements successfully added!');
		redirect ('newstudent.php');
	} 
	*/

	if ($IDNO == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$IDNO);
	}elseif ($LNAME == "") {
		message('Last Name is required!', "error");
		redirect ('index.php?view=edit&id='.$IDNO);
	}elseif ($FNAME == "") {
		message('First Name is required!', "error");
		redirect ('index.php?view=edit&id='.$IDNO);
	}elseif ($MNAME == "") {
		message('Middle Name is required!', "error");
		redirect ('index.php?view=edit&id='.$IDNO);
	}elseif ($EMAIL == "") {
		message('Email address is required!', "error");
		redirect ('index.php?view=edit&id='.$IDNO);
		
	}else{

		// $student->update($_GET['id']); 
		// //$sy->update($_GET['id']);  
		// $studdetails->update($_GET['id']);
		// $requirements->update($_GET['id']);
		
		if($student->update($_GET['id']) && $studdetails->update($_GET['id']) && $requirements->update($_GET['id'])){
			message('Student infomation updated successfully!', "info");
			redirect('index.php');	
		}else{
			message('Student infomation could be updated successfully!', "error");
			redirect('index.php');	
		}
		


	}
	}

			
	}
	
	function doEditPass(){
		if (isset($_POST['submit'])){	
			// echo json_encode($_POST);
			// exit;
		$IDNO  = $_POST['idno'];
		$OLD_PASSWORD   = $_POST['old_password'];
		$NEW_PASSWORD   = trim($_POST['new_password']);
		$CONFIRM_PASSWORD   = trim($_POST['confirm_password']);
		
		// $fac   = $_POST['fac'];
		// echo strcmp($NEW_PASSWORD,$CONFIRM_PASSWORD);
		// exit;
		$student = new Student();
		$single_student = $student->single_student($IDNO);
		
		$h_old = sha1($OLD_PASSWORD);
		$old_from_db = $single_student->PASSWORD;
		$h_psd = sha1($NEW_PASSWORD);
		// echo $student::Authenticatestudent($IDNO,$h_old);
		// exit;
	
		if($OLD_PASSWORD =="" || $NEW_PASSWORD =="" || $CONFIRM_PASSWORD =""){
			// echo "please fill up all fields";
			message('please fill up all fields!', "error");
			redirect('../index.php?page=9&id='.$IDNO);	
		}else{
			if(!$student::Authenticatestudent($IDNO,$h_old)){
				message('Old password is not correct!', "error");
				redirect('../index.php?page=9&id='.$IDNO);	
				// echo "Old password does not match new password";
			}else{
				global $NEW_PASSWORD, $CONFIRM_PASSWORD;
				// echo strcmp($NEW_PASSWORD , $CONFIRM_PASSWORD);
				// exit;
				if(strcmp($NEW_PASSWORD,$CONFIRM_PASSWORD) !== 0){
				message('New password does not match confirm password!', "error");
				redirect('../index.php?page=9&id='.$IDNO);	
				// echo "New password does not match confirm password";
				}else{
					// global $NEW_PASSWORD;
					
					$student = new Student();
					// echo $h_psd;
					// exit;
					// $student->ADMISSION_STATUS 	=	$ADMISSION_STATUS;
					// $student->PASSWORD = $h_psd;
					// $student->IDNO = $IDNO;
					$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
					// echo $h_psd;
					// exit;
					$query="UPDATE `tblstudent` SET `PASSWORD`='{$h_psd}' WHERE `IDNO`='{$IDNO}' ";
					// $query = "UPDATE `tblstudent` SET `PASWORD` = '".$h_psd."' WHERE `INDO` = '".$IDNO."'";
					$run_query = mysqli_query($con, $query);
					// echo $run_query;
					// exit;
					if($run_query){
						message('Password updated successfully!', "info");
						redirect('../login.php');	
					}else{
						message('Password could be updated successfully!', "error");
						redirect('../index.php?page=9&id='.$IDNO);	
					}
				}
		}
	}

		}
	
				
		}
	
function doDelete(){
	@$id=$_POST['selector'];
		$key = count($id);
		//multi delete using checkbox as a selector
		
		for($i=0;$i<$key;$i++){

			$student = new Student();
			$student->delete($id[$i]);
			$details = new Student_details();
			$details->delete($id[$i]);
			$sy = new Schoolyr();
			$sy->delete($id[$i]);
			$req = new Requirements();
			$req->delete($id[$i]);

		}
			message("Student has successfully deleted!","info");
			redirect('index.php');
}
function doAssignsubj(){
		global $mydb;
		$studentId = $_GET['studentId'];
		$SY = $_GET['SY'];
		$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		// echo $SY;
		// echo json_encode($_POST);
		// exit;
		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);
		// echo json_encode($subjectId);
		// exit;
		if (!$subjectId==''){
		// echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$studentId}'");
		// $mydb->setQuery("SELECT * FROM `schoolyr` WHERE `IDNO`='{$studentId}'");
		$res = $mydb->loadSingleResult();

		// echo json_encode($res) . '<br/>';
		// echo $res->SYID . '<br/>';
		// // echo $cid . '<br/>';
		// exit;
		$test = "";
		for ($i=0;$i<$subjId; $i++){
			$mydb->setQuery("SELECT  * 
							FROM  `subject` s WHERE SUBJ_ID='{$subjectId[$i]}'");
			$test .= $subjectId[$i]."\n";
			$cur = $mydb->loadResultlist();
			foreach ($cur as  $result) {
				 $grades = New Grades();
				$grades->IDNO				=	$studentId;
				$grades->SUBJ_ID			=	$result->SUBJ_ID;
				// $grades->INST_ID			=	'NONE';
				// $grades->SYID				=	$res->SYID;
				$grades->SYID				=	$cid;
				// $grades->FIRST				=	'NULL';
				// $grades->SECOND				=	'NULL';
				// $grades->THIRD				=	'NULL';
				// $grades->FOURTH				=	'NULL';
				// $grades->AVE				=	'NULL';
				// $grades->DAY				=	'NONE';
				// $grades->G_TIME				=	'NONE';
				// $grades->ROOM				=	'NONE';
				// $grades->REMARKS			=	'NONE';
				// $grades->COMMENT			=	'NONE';
				// $grades->FIN_AVE			=	'NONE';
				
				
				// $grades->REMARKS			=	'NONE';

				// echo json_encode($grades).'<br>';
				$grades->create();
			}
			// echo $test;
			// exit;
			message("Student's course already Added!","info");
			redirect('../index.php?page=8&SY='.$SY.'&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		 
		}
		}else{
			message("Select first the course(s) you want to Add!","error");
			redirect('../index.php?page=3&SY='.$SY.'&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}
	function doDelsubj(){
		$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
	  @$id=$_POST['selector'];
	  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$studSubjects = NEW Grades();
				$studSubjects->delete($id[$i]);
			}
					message("Student subject(s) already Deleted!","info");
					redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}
?>
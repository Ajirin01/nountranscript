<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
if (isset($_POST['save'])){

	if ($_POST['facultyname'] == "" OR $_POST['faculty_description'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$faculty = new Faculty();
		// $facultyid		= $_POST['facultyid'];
		$facultyname   = $_POST['facultyname'];
		$faculty_desc 	= $_POST['faculty_description'];
		$res = $faculty->find_all_faculty($facultyname);
		
		// echo $res;
		if ($res >=1) {
			message("Faculty name already exist!","error");
			redirect('index.php?view=add');

		}else{
			$faculty->FACULTY_NAME = $facultyname;
			$faculty->FACULTY_DESC = $faculty_desc;
			 $istrue = $faculty->create(); 
			//  echo $istrue;
			 if ($istrue == 1){
			 
			 	message("New [". $facultyname ."] Faculty created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$facultyid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['facultyname'] == "" OR $_POST['faculty_description'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$facultyid);

		}else{
			$faculty = new Faculty();
			$facultyid		= $_GET['id'];
			$facultyname   = $_POST['facultyname'];
			$faculty_desc 	= $_POST['faculty_description'];
					
			$faculty->DEPT_ID		   = $facultyid;
			$faculty->FACULTY_NAME = $facultyname;
			$faculty->FACULTY_DESC = $faculty_desc;
			$faculty->update($facultyid);

			$message = $facultyname. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$faculty = new Faculty();
		$faculty->delete($id[$i]);
	}

message("Faculty name(s) already Deleted!","info");
redirect('index.php');

}

?>
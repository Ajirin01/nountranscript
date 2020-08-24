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

	if ($_POST['deptname'] == "" OR $_POST['deptdesc'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$Dept = new Dept();
		// $deptid		= $_POST['deptid'];
		$facultyname   = $_POST['facultyname'];
		$deptname   = $_POST['deptname'];
		$dept_desc 	= $_POST['deptdesc'];
		$res = $Dept->find_all_dept($deptname);
				
		if ($res >=1) {
			message("Dept name already exist!","error");
			redirect('index.php?view=add');

		}else{
			$Dept->FACULTY_NAME = $facultyname;
			$Dept->DEPARTMENT_NAME = $deptname;
			$Dept->DEPARTMENT_DESC = $dept_desc;
			 $istrue = $Dept->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $deptname ."] Dept created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$deptid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['deptname'] == "" OR $_POST['deptdesc'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$deptid);

		}else{
			$dept = new Dept();
			$deptid		= $_GET['id'];
			$facultyname   = $_POST['facultyname'];
			$deptname   = $_POST['deptname'];
			$dept_desc 	= $_POST['deptdesc'];
					
			$dept->DEPT_ID		   = $deptid;
			$dept->FACULTY_NAME = $facultyname;
			$dept->DEPARTMENT_NAME = $deptname;
			$dept->DEPARTMENT_DESC = $dept_desc;
			$dept->update($deptid);

			$message = $deptname. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$Dept = new Dept();
		$Dept->delete($id[$i]);
	}

message("Dept name(s) already Deleted!","info");
redirect('index.php');

}

?>
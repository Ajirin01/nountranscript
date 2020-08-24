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

	if ($_POST['levelname'] == "" OR $_POST['level_description'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$level = new Level();
		$levelname   = $_POST['levelname'];
		$level_desc 	= $_POST['level_description'];
		$res = $level->levelfilter($levelname);

		// echo json_encode($res);
				
		if (count($res) >=1) {
			message("Level name already exist!","error");
			redirect('index.php?view=add');

		}else{
			$level->LEVEL = $levelname;
			$level->LEVEL_DESCRIPTION = $level_desc;
			 $istrue = $level->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $levelname ."] Level created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$levelid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['levelname'] == "" OR $_POST['level_description'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$levelid);

		}else{
			$level = new Level();
			$levelid		= $_GET['id'];
			$levelname   = $_POST['levelname'];
			$level_desc 	= $_POST['level_description'];
					
			$level->YR_ID		   = $levelid;
			$level->LEVEL = $levelname;
			$level->LEVEL_DESCRIPTION = $level_desc;
			$level->update($levelid);

			$message = $levelname. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$level = new Level();
		$level->delete($id[$i]);
	}

message("Level name(s) already Deleted!","info");
redirect('index.php');

}

?>
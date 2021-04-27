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

	if ($_POST['transcriptprocessname'] == "" OR $_POST['transcriptprocess_description'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$transcriptprocess = new TranscriptProcess();
		$transcriptprocessname   = $_POST['transcriptprocessname'];
		$transcriptprocess_desc 	= $_POST['transcriptprocess_description'];
		$res = $transcriptprocess->transcriptprocessfilter($transcriptprocessname);

		// echo json_encode($res);
				
		if (count($res) >=1) {
			message("TranscriptProcess name already exist!","error");
			redirect('index.php?view=add');

		}else{
			$transcriptprocess->LEVEL = $transcriptprocessname;
			$transcriptprocess->LEVEL_DESCRIPTION = $transcriptprocess_desc;
			 $istrue = $transcriptprocess->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $transcriptprocessname ."] TranscriptProcess created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$transcriptprocessid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['transcriptprocessname'] == "" OR $_POST['transcriptprocess_description'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$transcriptprocessid);

		}else{
			$transcriptprocess = new TranscriptProcess();
			$transcriptprocessid		= $_GET['id'];
			$transcriptprocessname   = $_POST['transcriptprocessname'];
			$transcriptprocess_desc 	= $_POST['transcriptprocess_description'];
					
			$transcriptprocess->YR_ID		   = $transcriptprocessid;
			$transcriptprocess->LEVEL = $transcriptprocessname;
			$transcriptprocess->LEVEL_DESCRIPTION = $transcriptprocess_desc;
			$transcriptprocess->update($transcriptprocessid);

			$message = $transcriptprocessname. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$transcriptprocess = new TranscriptProcess();
		$transcriptprocess->delete($id[$i]);
	}

message("TranscriptProcess name(s) already Deleted!","info");
redirect('index.php');

}

?>
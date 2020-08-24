		
	<caption><h3 align="left">List of Course</h3></caption>		
		<div class="well">
			    <form action="student/controller.php?action=assign&studentId=<?php echo $_GET['studentId'];?>&cid=<?php echo $_GET['cid'];?>&sy=<?php echo $_GET['sy'];?>&SY=<?php echo $_GET['SY'];?>" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Course</th>
				  		<th>Description</th>
				  		<th>Semester</th>
				  		<th>YR/Section</th>
				  		<th>Status</th>
				  	<!--	<th>Unit</th>
				  		<th>Pre-requisite</th>-->
				  		
				 	<!--	<th>Department</th>
				 		<th>Level</th>-->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		// $instructorId=$_GET['instructorId'];
				
					
					//   $mydb->setQuery("SELECT  * 
					//   						FROM  `subject` s,  `course` c , class cl 
					//   						WHERE s.`COURSE_ID`= c.`COURSE_ID` 
					//   						AND s.`SUBJ_ID`=cl.`SUBJ_ID`");
					// 	  	loadresult();
						 	$mydb->setQuery("SELECT  * 
					  						FROM  `subject`");
					  	 
						  	loadresult();
					  

				  		function loadresult(){
							  global $mydb;	
							  $level = new Level();
					  		 $cur = $mydb->loadResultlist();				  		
							foreach ($cur as $result) {

								if (isset($result->CLASS_ID)){
									//status
									$added = "Added";
									//for the selector
									$select = '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]"  disabled CHECKED="CHECKED"  value=""/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}else{
									//status
									$added = "None";
									//for the selector
									$select ='<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}
						  		echo '<tr>';
						  		echo '<td width="5%" align="center"></td>';
						  		// echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  		// 		 ' . $result->SUBJ_CODE.'</td>';
						  		echo $select;
						  		echo '<td width="30%">'. $result->SUBJ_DESCRIPTION.'</td>';
						  		// echo '<td>'. $result->UNIT.'</td>';
						  		// echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		echo '<td>'. $result->SEMESTER.'</td>';
								  // echo '<td>'. $result->COURSE_NAME.'</td>';
								  if($result->COURSE_ID <= 2){
									echo '<td>'. $level->single_level($result->COURSE_ID)->LEVEL.'</td>';
								  }else{
									  echo '<td>Level</td>';
								  }
						  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
								echo '<td>'.$added.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  
				</table>
				<div class="btn-group">
				  <a href="index.php?view=subject&studentId=<?php echo (isset($studentId)) ? $studentId : 'ID' ;?>&cid=<?php echo (isset($courseid)) ? $courseid : 'cid' ;?>&sy=<?php echo (isset($sy)) ? $sy : 'sy' ;?>" class="btn btn-default"><span class="glyphicon glyphicon-back"></span>Back</a>
				  <button type="submit" class="btn btn-default" name="Add"><span class="glyphicon glyphicon-plus-sign"></span>Register Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

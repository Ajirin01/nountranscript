<div class="row">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php

  	 if (isset($_GET['instructorId'])){			
			$instructor = new Instructor();
			$cur = $instructor->single_instructor($_GET['instructorId']);	
			// echo json_encode($cur);		
		}
	  ?>
 
<form class="form-horizontal span4" action="controller.php?action=delsubj" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Instructor's Subject </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >	   
     	 <div class="container">

     	  <div class="well" > 

    	<form class="form-horizontal span4" action="" method="POST">
    		<table>			 
         	
		    <tbody>
		     	<tr>
		     		<td>
		     			<p>
				     		<b>Full Name : </b><?php echo (isset($cur)) ? $cur->INST_FULLNAME : 'Fullname' ;?><br/>
				     		<b>Sex : </b><?php echo (isset($cur)) ? $cur->INST_SEX  : 'Sex' ;?><br/>
				     		<b>Employment Status : </b><?php echo (isset($cur)) ? $cur->EMPLOYMENT_STATUS : 'EMPLOYMENT STATUS' ;?><br/>
				     		<b>Specialization : </b><?php echo (isset($cur)) ? $cur->SPECIALIZATION : 'SPECIALIZATION' ;?><br/>
				     		<b>Address : </b><?php echo (isset($cur)) ? $cur->INST_ADDRESS : 'Address' ;?>

		     			</p>
		     		</td>
		     	</tr>
		    </tbody>
		   	   
			  
			</table>
		</form>
		<br>
		<h3 align="left">List of Course</h3>
			    <table id="example" class="display" cellspacing="0" width="100%">
				
				  <thead>
				  	<tr>
				  		<tr>
				  		<th width="10">No</th>	
				  		<th  width="20%" class="bottom"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Course</th>
				  		<th class="bottom">Description</th>
				  		<th class="bottom">Semester</th>
				 		<!-- <th class="bottom">Grade Level</th>
				 		<th class="bottom">Pre-requisite</th> -->
				 		<th align="center" class="bottom">Unit</th> 
						 <th align="center" class="bottom">Action</th> 
				 	<!-- 	<th class="bottom">Room</th> -->
				 		<!-- <th class="bottom">Days and Time</th>
				 		<th class="bottom">Students</th> -->

				  	</tr>	   
				  </thead>
				  <tbody>
				  	<?php

						function course_one($course, $filter){
							global $mydb;
							$mydb->setQuery("SELECT * 
								FROM  `subject` WHERE `SUBJ_CODE` = '$course'");
								$cur = $mydb->loadResultlist();
								foreach($cur as $cur){
									return  $cur->$filter;
								}
						}
						$course = 'Spiral Filipino';
						$course_description = 'SUBJ_DESCRIPTION';
						$course_semester = 'SEMESTER';
						$course_unit = 'UNIT';
						$inst_id = $_GET['instructorId'];
						// course_one($course, $filter);
						// echo course_one($course, $filter);
						$mydb->setQuery("SELECT * 
								FROM  class WHERE `INST_ID` = '$inst_id' ");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {
					  		echo '<tr>';
					  		echo '<td width="10" align="center"></td>';
					  		echo '<td width="20%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CLASS_ID. '"/>
				  			'.$result->CLASS_CODE .'</td>';
					  		echo '<td width="30%">'. course_one($result->CLASS_CODE, $course_description).'</td>';
					  		echo '<td>'. course_one($result->CLASS_CODE, $course_semester).'</td>';
					  		echo '<td>'. course_one($result->CLASS_CODE, $course_unit).'</td>';
					  	//	
							echo '<td><a href="index.php?view=class&id='.$result->CLASS_ID.'&instructorId='.$result->INST_ID.'">View</a></td>';
						//	echo '<td><a href="#.php?id='.$result->CLASS_ID.'">'. $result->DAY.'/'. $result->C_TIME.'</a></td>';
							echo  '<input type="hidden" name="INST_ID" id="INST_ID" value="'.$result->INST_ID.'"/>';
					  		echo '</tr>';
				  		}
					  	 
				  	?>
				  </tbody>
	  		
			</table>			
				<div class="btn-group">
				  <a href="index.php" class="btn btn-default">Back</a>
				   <a href="index.php?view=assign&instructorId=<?php  echo (isset($_GET['instructorId'])) ? $_GET['instructorId']: 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  Assign Subjects</a>
				   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
  
</div>
</div>
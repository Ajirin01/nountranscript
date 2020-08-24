
<div class="rows">

<div class="col-12 col-sm-12 col-lg-12">
  <?php
			 if (isset($_GET['studentId'])){
			  if ($_GET['studentId']==""){
				  message("ID Number is required!","error");
				  check_message();
				  
			  }else{

				  
				  $Schoolyr = new Schoolyr();
				  $NumberofResult = $Schoolyr->findsy($_GET['studentId']);
				  if ($NumberofResult == 0){
					  // message("This Student is advice to go back from step 1!","error");
					  // check_message();
					   redirect("enrollment.php?studentId=".$_GET['studentId']);


				  }else{
					  
					  $sy = $Schoolyr->single_sy($_GET['sy']);
					  // $course = new subject();
					  // $studcourse = $course->single_subject($sy->COURSE_ID);
					  $mydb->setQuery("SELECT * FROM `schoolyr` where COURSE_ID=".$sy->COURSE_ID);
						$studcourse = $mydb->loadResultList();
					  // echo json_encode($cur);
					  // exit;
					  //the button in assigning the subjects.
					  $button ='<a href = "index.php?view=assign&studentId='.$_GET['studentId'].'&SY='.$sy->AY.'&cid='.$sy->COURSE_ID.'&sy='.$_GET['sy'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Assign Subject</a>
					   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>';

				  }

				  $student = new Student();
				  $cur = $student->single_student($_GET['studentId']);
				  $mydb->setQuery("SELECT * 
								  FROM  `schoolyr` sy
								  WHERE  sy.`COURSE_ID`=".$_GET['cid']);
				  $grade_level = $mydb->loadResultlist();

			  }
		  }

?>
   
		<!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
				  <div class="panel panel-primary">
					<div class="panel-heading">
					  <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Registered Courses by the Student </h3>
					</div>
					<div class="panel-body">
					 <div class="row">      	  		            		          
					 <div class="container">
					   <div class="well">
					  <span id="printout">
						 <table > 
						
						   <tbody>
							   <tr>
								   
								   <td>
									   <p><b>ID Number : </b><?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?><br/>
								   <b>Name :</b><?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?><br/>
								   <b>Status : </b><?php echo (isset($sy)) ? $sy->STATUS : 'STATUS' ;?><br/>
								   <b>AY : </b><?php echo (isset($sy)) ? $sy->AY : 'STATUS' ;?><br/>
								   <b>Semester:</b> <?php echo (isset($sy)) ? $sy->SEMESTER : 'COURSE' ;?><br/>
								   
								   
								   </p></td>
								   
							   </tr>
							</tbody>
						   
					   </table>
					   <br>
					   <form class="form-horizontal span4" action="controller.php?action=delsubj&studentId=<?php echo $_GET['studentId']; ?>&cid=<?php echo $_GET['cid']; ?>&sy=<?php echo $_GET['sy']; ?>" method="POST">					    
							  <table  class="table table-striped" cellspacing="0" id="table">
						  
								<thead>
									<tr >
										<?php
											echo '<th>Subject</th>';	
										?>								  		 
																		   
										<th class="bottom">Description</th>
										<th>CA</th>
										<th>EX</th>
										<th>GP</th>
										<!-- <th>4th</th>
									  <th>Final</th>				  		
										<th>Remarks</th> -->
									<!--	<th class="bottom">Semester</th>
									   <th class="bottom">Department</th>
									   <th class="bottom">Pre-requisite</th>
									   <th align="center" class="bottom">Unit</th>
										-->
				  
									</tr>	   
								</thead>
								<tbody>
									<?php
									  //  $cid = (isset($studcourse) && $studcourse !== null) ? $studcourse->COURSE_ID : 0;
									  //  echo json_encode($studcourse);
									  //  exit;
											
										  // $mydb->setQuery("SELECT * 
										  // 				FROM  `grades` g
										  // 				WHERE  g.`SYID`=".$_GET['cid']);
										  // $grade_level = $mydb->loadResultlist();
										  // echo json_encode($grade_level);
										  // exit;
										  $year_level =$_GET['cid'];
										  $studentID = $_GET['studentId'];
										  $mydb->setQuery("SELECT * 
														  FROM  `schoolyr` sy
														  WHERE sy.`IDNO`='$studentID'
														  AND sy.`COURSE_ID`='$year_level' LIMIT 1");
										  $grade_level = $mydb->loadResultlist();
										  
										  $level = $grade_level[0]->COURSE_ID;
										  // $mydb->setQuery("SELECT * 
										  // 				FROM  `subject` s ,`grades` g
										  // 				WHERE  s.`SUBJ_ID`=g.`SUBJ_ID` 
										  // 				AND  `IDNO` = '$studentID' AND g.`SYID`='$level'");
										  $mydb->setQuery("SELECT * FROM `grades` g
														  WHERE  `IDNO` = '$studentID' AND g.`SYID`='$year_level'");
										  // $cur = $mydb->loadResultlist();
										  // echo json_encode($grade_level);

										  function get_course($id, $filter){
											  global $mydb;
											  $mydb->setQuery("SELECT * FROM `subject` s
														  WHERE  `SUBJ_ID` = '$id'");
											  $cur = $mydb->loadResultlist();
											  return $cur[0]->$filter;
										  }
										  
										  // exit;
											$cur = $mydb->loadResultlist();
										  //   echo json_encode($cur)."<br><br>";
										  //   echo json_encode($grade_level);
										  //   exit;
										  foreach ($cur as $result) {
												echo '<tr>';

												echo '<td width="15%">';
											  	echo get_course($result->SUBJ_ID,"SUBJ_CODE") .'</td>';
												echo '<td width="30%">'. get_course($result->SUBJ_ID,"SUBJ_DESCRIPTION").'</td>';
											  	echo '<td>'.$result->FIRST.'</td>';
												echo '<td>'. $result->SECOND.'</td>';
												echo '<td>'. $result->AVE.'</td>';  

												echo '</tr>';
											}
										 
									?>
								</tbody>
							   
							  </table>
							  </span>



					  
						   <a href = "index.php?page=8&cid=<?php echo $_GET['cid'];?>&sy=<?php echo $_GET['sy'];?>&SY=<?php echo $_GET['SY'];?>&studentId=<?php  echo (isset($_GET['studentId'])) ? $_SESSION['IDNO'] : 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Register New Course(s)</a>
					<!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				  </form>
					  </body>
					  </html>		
					</div>
				  </div>
								  
			  </form>
				   
					  </div>	
					 </div>				            	              
					</div>				          
				   </div><!--/span-->
			  <!--  </form> -->
							
	  
  

					  </div>
</div>
<script>
function tablePrint(){ 
document.all.divButtons.style.visibility = 'hidden';  
  var display_setting="toolbar=no,location=no,directories=no,menubar=no,";  
  display_setting+="scrollbars=no,width=500, height=500, left=100, top=25";  
//   var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
  var content_innerhtml = document.getElementById("printout").innerHTML;  
  var document_print=window.open("","",display_setting);  
  document_print.document.open();  
  document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');  
  document_print.document.write(content_innerhtml);  
  document_print.document.write('</body></html>');  
  document_print.print();  
  document_print.document.close(); 
 
  return false;  
  } 
$(document).ready(function() {
  oTable = jQuery('#example').dataTable({
  "bJQueryUI": true,
  "sPaginationType": "full_numbers"
  } );
});   
</script>
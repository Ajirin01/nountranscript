<?php 
 include('includes/initialize.php');
?>
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			
			  ?>
 
		  <form class="form-horizontal span6" action="student/controller.php?action=enroll" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">
			            <div class="col-6 col-sm-6 col-lg-8">
			             <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">ID Number: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">Name: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Status">Status : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="New">New Student</option>
									<option value="Continuing">Continuing</option>	
									<option value="Trasferee">Trasferee</option>	
								</select>
				              </div>
				            </div>
				          </div>
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "course">Year and Section :</label>

				              <div class="col-md-6">
				               <select class="form-control input-sm" name="course" id="course">
				                  	<?php
				                	// $mydb->setQuery("SELECT * FROM `level`");
									// $cur = $mydb->loadResultList();
									$level = new Level();
				                  	$cur = $level->allLevel();
									// echo json_encode($cur);
									// exit;
				                  	foreach ($cur as $level) {
				                  		echo '<option value="'. $level->YR_ID.'">'.$level->LEVEL.'</option>';
				                  	}

				                  	?>
										
									</select>	
				              </div>
				            </div>
				          </div>
				          
			           
				           
			         
			             
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "ay">Academic Year :</label>

				              <div class="col-md-6">
				                <select class="form-control input-sm" name="ay" id="ay">
									<?php echo make_year(30,2014); ?> 
								</select>	
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">Semester : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Semester" id="Semester">
									<option value="First">First</option>
									<option value="Second">Second</option>	
								</select>
				              </div>
				            </div>
				          </div> 
				        <!--  <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "First" type="hidden" value="First"> -->
				          <div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group"> 
							          <a href="index.php" name="back" class="btn btn-default"></span>Back</a>
										<button type="submit" name="savestep1" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									</div>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			           

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>
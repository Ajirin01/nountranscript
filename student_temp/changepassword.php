<?php 

				$student = new Student();
				$cur = $student->single_student($_GET['id']);
			?>
		        <form class="form-horizontal well span9" action="student/controller.php?action=editpass&id=<?php echo $cur->IDNO; ?>" method="POST">

					<fieldset>
						<legend>Change Password</legend>
															

						<div class="form-group" id="idno">
							<div class="col-md-12">
							<label class="col-md-2 control-label" for=
							"idno">ID Number*</label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="idno" name="idno" placeholder=
								"ID Number" type="text" value="<?php echo $cur->IDNO; ?>" readonly>
							</div>
							</div>
			          </div>
					  <div class="form-group" id="password">
							<div class="col-md-12">
							<label class="col-md-2 control-label" for=
							"old_password">Old Password*</label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="oldpassword" name="old_password" placeholder=
								"Enter Old password" type="password">
							</div>
							</div>
			          </div>
					  <div class="form-group" id="password">
							<div class="col-md-12">
							<label class="col-md-2 control-label" for=
							"new_password">New Password*</label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="newpassword" name="new_password" placeholder=
								"Enter new password" type="password">
							</div>
							</div>
			          </div>
					  <div class="form-group" id="password">
							<div class="col-md-12">
							<label class="col-md-2 control-label" for=
							"confirm_password">Re-type New Password*</label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="confirmpassword" name="confirm_password" placeholder=
								"Enter new password again" type="password">
							</div>
							</div>
			          </div>
					  <div class="col-md-6" align="right">
						<button class="btn btn-primary" name="submit" type="submit" >Save</button>
					</div>
				</fieldset>	
					
		          </div>
		          </div>
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			

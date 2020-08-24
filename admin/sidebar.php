<?php check_message(); ?>
<div class="row row-offcanvas row-offcanvas-middle">
<div class="col-xs-12 col-sm-12 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="panel panel-success">
					
					  <div class="panel-heading">User Login</div>
					   <div class="panel-body">	
						   <form  method="POST" action="login.php">
								<div class="col-md-12">

					            	<div class="form-group">
					            		<div class="row" >
					            			<div class="col-md-12">
						              			<input type="email" placeholder="Email" class="form-control" name="uname">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-md-12">
						              			<input type="password" placeholder="Password" class="form-control" name="pass">
						              		</div>
						            	</div>
						            </div>

						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-md-6">
						           				 <button type="submit" class="btn btn-success" align="left"name="btnlogin">Sign in <span class="glyphicon glyphicon-log-in"></span></button>
						           			 </div>
											<div class="col-md-6">
						           				 <a href="instructor/add.php" type="submit" class="btn btn-success" align="right"name="btnlogin">Register <span class="glyphicon glyphicon-log-in"></span></a>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
						</div>
				</div>
	</div>
	<!--/.well --> 
</div>
<!--/span-->
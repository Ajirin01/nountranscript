<?php //include 'banner.php';?>
<div class="container" style="margin-top: 50px">
	<div class="rows">
		<div class="col col-lg-9">
				<div class="well">
					<fieldset>
						<legend><h2 class="text-left">Welcome!</h2></legend>
						<h4>Student Transcript Processing System</h4>
					</fieldset>	
					<br/>
					<br/>
					
				</div>
		</div>
	</div>
	<!--/span--> 
		<div class="col col-lg-3" id="sidebar" role="navigation">
			<div class="sidebar-nav">
				<div class="panel panel-success">
			  		<div class="panel-heading">Login Information</div>
					   <div class="panel-body">	
							<div class="col-xs-12 col-sm-12">
							 <span class="glyphicon glyphicon-user"> </span> <label><?Php echo $_SESSION['ACCOUNT_NAME'];?></label><br/>
							 <span class="glyphicon glyphicon-cog"> </span> <label><?Php echo $_SESSION['ACCOUNT_TYPE'];?></label><br/>
							  <a href="logout.php" class="btn btn-default">Logout <span class="glyphicon glyphicon-log-out"></span></a>
							</div>					            					            		
						</div>
					          
				</div>
			</div>
	</div>
	
<!--/.well --> 
</div><!--container-->
	

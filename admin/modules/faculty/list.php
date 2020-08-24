<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">List of Faculty</h3></caption>
				  <thead>
				  	<tr>
				  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Faculty Name</th>
				  		<th>Faculty Description</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$faculty = new Faculty();
						$cur = $faculty->listOfFaculty();
						// echo json_encode($cur);
						if(count($cur)>0){
							foreach ($cur as $Faculty) {
								echo '<tr>';
								echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$Faculty->FACULTY_ID. '"/>
										<a href="index.php?view=edit&id='.$Faculty->FACULTY_ID.'">' . $Faculty->FACULTY_NAME.'</a></td>';
								echo '<td colspan="3">'. $Faculty->FACULTY_DESC.'</td>';
								echo '</tr>';
							} 
						}
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td></tr>
				  </tfoot>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

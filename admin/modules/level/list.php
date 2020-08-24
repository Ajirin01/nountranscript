<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">List of levels</h3></caption>
				  <thead>
				  	<tr>
				  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> level</th>
				  		<th>level Description</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$Level = new Level();
						$cur = $Level->allLevel();
						if( count($cur) > 0){
						foreach ($cur as $Level) {
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$Level->YR_ID . '"/>
				  				<a href="index.php?view=edit&id='.$Level->YR_ID .'">' . $Level->LEVEL.'</a></td>';
				  		echo '<td colspan="3">'. $Level->LEVEL_DESCRIPTION.'</td>';
				  		echo '</tr>';
					  } 
					}else{
						echo "<td>no records</td>";
						echo "<td>no records</td>";
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

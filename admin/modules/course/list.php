<div class="container">
    <div class="col-12">
        <h3 align="left">List of Course</h3>
        <form action="controller.php?action=delete" Method="POST">
            <table id="example" class="table table-striped" cellspacing="0">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>
                            <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
                            Course
                        </th>
                        <th>Description</th>
                        <th>Unit</th>

                        <th>Semester</th>
                        <th>Grade Level</th>
                        <th>Pre-requisite</th>
                        <!--	<th>Level</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php
				  	
					  		// $mydb->setQuery("SELECT * 
							// 				FROM  `subject` s,  `course` c
							// 				WHERE s.`COURSE_ID` = c.`COURSE_ID` ");
							// $mydb->setQuery("SELECT * 
							// 				FROM  `subject` s");
							$mydb->setQuery("SELECT * 
											FROM  `subject` s,  `level` l
											");
					  		/*$mydb->setQuery("SELECT * 
											FROM  `subject` s ");*/
						  	loadresult();
							
				  		function loadresult(){
							$level = new Level();
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';
						  		echo '<td width="5%" align="center"></td>';
						  		echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				<a href="index.php?view=edit&id='.$result->SUBJ_ID.'">' . $result->SUBJ_CODE.'</a></td>';
						  		echo '<td width="40%">'. $result->SUBJ_DESCRIPTION.'</td>';
						  		echo '<td>'. $result->UNIT.'</td>';
								echo '<td>'. $result->SEMESTER.'</td>';
								if($result->COURSE_ID <= 2){
								  echo '<td>'. $level->single_level($result->COURSE_ID)->LEVEL.'</td>';
								}else{
									echo '<td>Level</td>';
								}
						  		echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';

						  		echo '</tr>';
					  		}
					  	} 
				  	?>
                </tbody>

            </table>
            <?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				   <a href="index.php?view=import" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-up"></span>  Import</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
        </form>
    </div>
    <!--End of well-->

</div>
<!--End of container-->
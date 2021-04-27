<div class="container">
    <div class="well">

        <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" Method="POST">
            <table class="table table-hover">
                <caption>
                    <h3 align="left">Student Enrollment Records</h3>
                </caption>
                <thead>
                    <tr>
                        <th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
                            Grade and Section</th>
                        <!--	<th>Semester</th>-->
                        <th>Schoolyr</th>
                        <th>Status</th>
                        <th>Date Enrolled</th>
                        <th>Options</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
					  function get_level($level_id){
						  global $mydb;
						$mydb->setQuery("SELECT * FROM `level` WHERE YR_ID='$level_id' ");
						$cur = $mydb->loadResultList();
						$level = $cur[0];
						return $level->LEVEL;
					  }
					//  echo get_level(2);
					//   exit;
				  		// $mydb->setQuery("SELECT  `LEVEL` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
						// 				FROM  `schoolyr` s,  `course` c
						// 				WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_GET['studentId']);
						$mydb->setQuery("SELECT * FROM `tblstudent` where IDNO=".$_GET['studentId']);
						  $cur = $mydb->loadResultList();
						//   echo json_encode($cur)."<br><br>";
						  $mydb->setQuery("SELECT * FROM `schoolyr` where IDNO=".$_GET['studentId']);
						  $cur = $mydb->loadResultList();
						//   echo json_encode($cur)."<br>";
						//   exit;
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
						$level = $schoolyr->COURSE_ID;
				  		echo '<tr>';
						if($level>5){echo "<td>level error</td>";}else{
				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>
				  				<a href="index.php?view=editenrollment&studentId='.$_GET['studentId'].'&id='.$schoolyr->SYID.'">' .get_level($level).'</a></td>';
						}
								  //		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		// echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">Enrolled Course</a>
				  		// <a href = "trans.php?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'">Vew Transcript</a></td>';
						  echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">Enrolled Course</a>
				  		// <a href = "index.php?view=trans&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'">Vew Transcript</a></td>';
						//   echo '</tr>';
						'<a href = "/admin/modules/student/trans?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'">Vew Transcript</a></td>';
						  echo '</tr>';
				  	} 
				  	?>
                </tbody>

            </table>
            <?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '<div class="btn-group">
				  <a href="index.php?view=enroll&studentId='. $_GET['studentId'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
				
				 }
				?>
        </form>
    </div>
    <!--End of well-->

</div>
<!--End of container-->
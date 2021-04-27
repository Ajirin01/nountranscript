<div class="col-12">

    <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">
        <table class="table table-hover">
            <caption>
                <h3 align="left">Student Enrollment Records</h3>
            </caption>
            <thead>
                <tr>
                    <th> Grade and Section</th>
                    <th>Schoolyr</th>
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
						$mydb->setQuery("SELECT * FROM `tblstudent` where IDNO=".$_SESSION['IDNO']);
						  $cur = $mydb->loadResultList();

						$mydb->setQuery("SELECT * FROM `schoolyr` where IDNO=".$_SESSION['IDNO']);
						  $cur = $mydb->loadResultList();
						  foreach ($cur as $schoolyr) {

							$level = $schoolyr->COURSE_ID;
							  echo '<tr>';
							if($level>5){echo "<td>level error</td>";}else{
							  echo '<td><a href="index.php?view=editenrollment&studentId='.$_SESSION['IDNO'].'&id='.$schoolyr->SYID.'">' .get_level($level).'</a></td>';
							}

							  echo '<td>'. $schoolyr->AY.'</td>';

							//   echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&SY='.$schoolyr->AY.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">Registered Courses</a>
							//   <a href = "index.php?page=5&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'&ay='.$schoolyr->AY.'">Vew Transcript</a></td>';
							//   echo '</tr>';

							echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&SY='.$schoolyr->AY.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">Registered Courses</a>
							<a href = "index.php?page=5&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'&ay='.$schoolyr->AY.'">Vew Transcript</a></td>';
							echo '</tr>';
						  } 
				  	?>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

    </form>
</div>
<!--End of well-->

</div>
<!--End of container-->
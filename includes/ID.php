<?php
$con =  mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$mydb = "SELECT * FROM tblstudent";
$cur = mysqli_query($con, $mydb);
$rows = array();
$row_num = mysqli_num_rows($cur);
$_SESSION['row_num'] = $row_num;

while($row = mysqli_fetch_array($cur)){
  // echo json_encode($row);
  $rows[] = $row;
}
$_SESSION['rows'] = $rows;
?>
<?php //include 'banner.php';
    include_once 'includes/initialize.php';
	if(!isset($_SESSION['IDNO'])){
		// header('location: /login');
        echo "<script>window.location = '/login.php'</script>";
	}
    
    $TranscriptProcess = new TranscriptProcess(); 
    $single_transcriptProcess = $TranscriptProcess->single_transcriptProcess($_SESSION['IDNO']);

    // echo json_encode($single_transcriptProcess);
    // exit;
    
    $mydb->setQuery("SELECT * 
    FROM tblstudent WHERE IDNO=".$_SESSION['IDNO']);
    $student = $mydb->loadResultList();
    // echo json_encode($student) .'<br>';
    
    $mydb->setQuery("SELECT * 
    FROM schoolyr WHERE IDNO=".$_SESSION['IDNO']);
    $schoolyr = $mydb->loadResultList();
    // echo json_encode($schoolyr).'<br>';
    $array = array();
    for($i=0; $i<count($schoolyr); $i++){
        // echo $schoolyr[$i]->AY .'<br>';
        array_push($array, [explode('-',$schoolyr[$i]->AY)[1] + explode('-',$schoolyr[$i]->AY)[1],$schoolyr[$i]->SYID, $schoolyr[$i]->COURSE_ID]);
    }
    rsort($array);
    // echo json_encode($array[0]) .'<br>';
    // exit;
    $grad_year = $array[0][0]/2;
    // echo $grad_year - 1 .'-'. $grad_year;
    $grad_session = $grad_year - 1 .'-'. $grad_year;
    $SYID = $array[0][1];
    $COURSE_ID = $array[0][2];

    // echo json_encode($COURSE_ID);
    // exit;
?>

<div class="col-lg-9">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Welcome!</h5>

            <p class="card-text">
                Student Transcript Processing System
            </p>

            <a href="<?php echo WEB_ROOT; ?>index.php?page=2" class="card-link">Profile</a>
            <a href="<?php echo WEB_ROOT; ?>index.php?page=3" class="card-link">Records</a>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login Information</h5>

            <p class="card-text">
                <span class="glyphicon glyphicon-user"> </span> <label>
                    <?Php
                        if(!empty($_SESSION)){
                            echo $_SESSION['FNAME'];
                        }
                     ?>
                </label><br />
                <span class="glyphicon glyphicon-cog"> </span> <label>
                    <?Php
                    if(!empty($_SESSION)){
                        echo $_SESSION['LNAME'];
                    }
                ?>
                </label><br />
            </p>

            <a href="logout.php" class="card-link">Logout <span class="glyphicon glyphicon-log-out"></span></a>
            <a href="index.php?page=9&id=<?Php
                    if(!empty($_SESSION)){
                        echo $_SESSION['IDNO'];
                    }
                ?>" class="card-link">Change
                Password <span class="glyphicon glyphicon-log-out"></span></a>
        </div>
    </div>
</div>
<?php
    if($student[0]->ADMISSION_STATUS == "graduated"){
        if($single_transcriptProcess != null){
            if($single_transcriptProcess->status != 'granted'){
?>

<div class="col-lg-9">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Graduated Student</h5> <br>
            <form class="card-link" action="<?php echo WEB_ROOT; ?>handle-transcript-request" method="POST">
                <input type="hidden" name="studentId" id="" value="<?php echo $_SESSION['IDNO'];?>">
                <input type="hidden" name="cid" id="" value="<?php echo $COURSE_ID;?>">
                <input type="hidden" name="sy" id="" value="<?php echo $SYID;?>">
                <input type="hidden" name="ay" id="" value="<?php echo $grad_session;?>">
                <input type="submit" class="btn btn-primary" value="Request Transcript" name="request">
            </form>
        </div>
    </div>
</div>
<?php
;
}else{
    ?>
<div class="col-lg-9">
    <div class="card">
        <div class="card-body">
            <!-- <h5 class="card-title">Graduated Student</h5> <br> -->
            <h5 class="card-title">Transcript is Ready!</h5> <br>
            <form class="card-link" action="<?php echo WEB_ROOT; ?>print-transcript" method="POST">
                <input type="hidden" name="studentId" id="" value="<?php echo $_SESSION['IDNO'];?>">
                <input type="hidden" name="cid" id="" value="<?php echo $COURSE_ID;?>">
                <input type="hidden" name="sy" id="" value="<?php echo $SYID;?>">
                <input type="hidden" name="ay" id="" value="<?php echo $grad_session;?>">
                <input type="hidden" name="image" id="" value="<?php echo $single_transcriptProcess->signature;?>">
                <input type="submit" class="btn btn-primary" value="Print Transcript" name="request">
        </div>
    </div>
</div>
</form>
<?php
}

}}?>
<!--container-->
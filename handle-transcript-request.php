<?php
    // session_start();
    include_once 'includes/initialize.php';
   if(isset($_POST['request'])){
    //    echo json_encode($_POST) . '<br>'; 
       $IDNO = $_POST['studentId'];
       $SYID = $_POST['sy'];
       $AY = $_POST['ay'];
       $COURSE_ID = $_POST['cid'];

       $url = "<a href = '/admin/modules/student/trans?studentId=".$IDNO."&cid=".$COURSE_ID."&sy=".$SYID."&ay=".$AY."'".">Vew Transcript</a>";
    //    echo $url; 
       $TranscriptProcess = new TranscriptProcess();
        $TranscriptProcess->url = $url;
        $TranscriptProcess->studentID = $IDNO;
        $TranscriptProcess->create();

        // $_SESSION["message"] = "Request Sent!";
        echo "<script>alert('Request Sent!')
        window.location = 'index.php'
        </script>";
        // header('location: index.php');
   }
?>
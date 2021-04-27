<?php
    include('../../../includes/initialize.php');
    // echo "<script>window.location = ".$_POST['image_url']."</script>";
    $image = $_POST['image_url'];
    $studentID = $_POST['studentID'];
    // echo json_encode($studentID);
    // exit;
    // echo "<img src='$image'>";
    $TranscriptProcess = new TranscriptProcess();
    $TranscriptProcess->signature = $image;
    $TranscriptProcess->status = 'granted';
    $TranscriptProcess->update($studentID);

    echo "<script>window.location = '/admin/modules/transcriptprocess/index.php'</script>";
?>
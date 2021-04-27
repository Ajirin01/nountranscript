<?php require_once("includes/initialize.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>template/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body class="hold-transition login-page">
    <?php
        if (logged_in()) {
    ?>
    <script type="text/javascript">
    window.location = "index.php";
    </script>
    <?php
    }?>



    <?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?> <script type="text/javascript">
    alert("Invalid Username and Password!");
    window.location = "login.php";
    </script>
    <?php
        
    } else {
		//it creates a new objects of member
        $user = new Student();
    //make use of the static function, and we passed to parameters
    
		$res = $user::Authenticatestudent($uname, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?> <script type="text/javascript">
    //then it will be redirected to home.php
    window.location = "index.php";
    </script>
    <?php
		
		
		} else {
?> <script type="text/javascript">
    alert("Username or Password Not Registered! Contact Your administrator.");
    window.location = "login.php";
    </script>
    <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>
    <?php include("sidebar.php") ?>


    </div>
    <!--/span-->

    </div>
    <!--/row-->

    <hr>




    <!-- jQuery -->
    <script src="<?php echo WEB_ROOT; ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo WEB_ROOT; ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo WEB_ROOT; ?>template/dist/js/adminlte.min.js"></script>

</body>

</html>
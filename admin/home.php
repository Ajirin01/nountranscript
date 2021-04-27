<?php
    if(!isset($_SESSION['ACCOUNT_NAME'])){
		// header('location: /login2');
			echo '<script>
			window.location = "login2.php";
			</script>';
		}
	
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
            <h5 class="card-title" style="font-size: 1.4rem">Login Information</h5>

            <p class="card-text">
                <span class="glyphicon glyphicon-user"> </span> <label>
                    <?Php echo $_SESSION['ACCOUNT_NAME'];?>
                </label><br />
                <span class="glyphicon glyphicon-cog"> </span> <label>
                    <?Php echo $_SESSION['ACCOUNT_TYPE'];?>
                </label><br />
            </p>

            <a href="logout.php" class="card-link">Logout <span class="glyphicon glyphicon-log-out"></span></a>

        </div>
    </div>
</div>
<!--container-->
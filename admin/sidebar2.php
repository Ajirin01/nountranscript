<?php check_message(); ?>
<div class="login-box">
    <div class="login-logo">
        <a href="/eportal">Student Transcript Processing System</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="login2.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="User ID" name="uname">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="pass">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="instructor/add.php" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
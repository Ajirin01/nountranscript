<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Student Transcript Processing System</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>template/dist/css/adminlte.min.css">
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/jquery.modal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/signature.css">
    <script src="<?php echo WEB_ROOT; ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        var t = $('#example').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 1
            }],
            "order": [
                [3, 'asc']
            ]
        });

        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/index.php" class="nav-link">Dashboard</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="<?php echo WEB_ROOT; ?>index.php?page=2" class="d-block"><label>
                                <?Php echo $_SESSION['ACCOUNT_NAME'];?>
                            </label></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php 
                                    $TranscriptProcess = new TranscriptProcess(); 
                                    $listOfPendingtranscriptProcess = $TranscriptProcess->listOfPendingtranscriptProcess();
                                    // echo "<li class='nav-item'>".json_encode(count($listOfPendingtranscriptProcess))."<li><br>";
                                    if($_SESSION['ACCOUNT_TYPE'] == "Course In-charge"){
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/course/index.php' class='nav-link'> <i class='fa fa-graduation-cap nav-icon'></i><p>Course</p></a></li>";
                                    }else if($_SESSION['ACCOUNT_TYPE'] == "Teacher"){
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/student/index.php' class='nav-link'> <i class='fa fa-user nav-icon'></i><p>Student</p></a></li>";
                                    }else if($_SESSION['ACCOUNT_TYPE'] == "Administrator"){
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/student/index.php' class='nav-link'> <i class='fa fa-user nav-icon'></i><p>Student</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/course/index.php' class='nav-link'> <i class='fa fa-graduation-cap nav-icon'></i><p>Course</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/level/index.php' class='nav-link'> <i class='fa fa-signal nav-icon'></i><p>Level</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/faculty/index.php' class='nav-link'> <i class='fa fa-home nav-icon'></i><p>Faculty</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/instructor/index.php' class='nav-link'> <i class='fa fa-user nav-icon'></i><p>Lecturer</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/department/index.php' class='nav-link'> <i class='fa fa-home nav-icon'></i><p>Department</p></a></li>";
                                        echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/admission/index.php' class='nav-link'> <i class='fa fa-id-card nav-icon'></i><p>Admission</p></a></li>";
                                        if(count($listOfPendingtranscriptProcess)>0){
                                            echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/transcriptprocess/index.php' class='nav-link'> <i class='fa fa-id-card nav-icon'></i><p>Transcript Requests <span style='color: white; background-color: rgb(214, 29, 29); padding: 4px 8px; border-radius: 50px'>".count($listOfPendingtranscriptProcess)."</span></p></a></li>";
                                        }else{
                                            echo "<li class='nav-item'><a href='". WEB_ROOT ."admin/modules/transcriptprocess/index.php' class='nav-link'> <i class='fa fa-id-card nav-icon'></i><p>Transcript Requests</p></a></li>";
                                        }
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/logout.php" class="nav-link">
                                <i class="fa fa-toggle-off nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Student Transcript Processing System</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php check_message(); ?>
                        <?php require_once $content;?>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Student Transcript Processing System
            </div>
            <!-- Default to the left -->
            <strong>
                <p align="center">&copy; <script>
                    var date = new Date
                    console.log(date.getFullYear())
                    document.write(date.getFullYear())
                    </script> - <a href="http://www.digi-realm.com.ng/">Digi-Realm City Solution</a></p>
            </strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>

    <script src="<?php echo WEB_ROOT; ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo WEB_ROOT; ?>template/dist/js/adminlte.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
    <!--     <script src="assets/js/jquery.js"></script>>-->
    <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
    <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/signature.js"></script>
    <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js"
        charset="UTF-8"></script>

    <script type="text/javascript">
    $('.form_curdate').datetimepicker({
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_bdatess').datetimepicker({
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    </script>
    <script>
    function checkall(selector) {
        if (document.getElementById('chkall').checked == true) {
            var chkelement = document.getElementsByName(selector);
            for (var i = 0; i < chkelement.length; i++) {
                chkelement.item(i).checked = true;
            }
        } else {
            var chkelement = document.getElementsByName(selector);
            for (var i = 0; i < chkelement.length; i++) {
                chkelement.item(i).checked = false;
            }
        }
    }

    function checkNumber(textBox) {
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
            textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
    }
    //
    function checkText(textBox) {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
            textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
    }

    function calculate() {

        var first = document.getElementById('first').value;
        var second = document.getElementById('second').value;
        var third = document.getElementById('third').value;
        var fourth = document.getElementById('fourth').value;

        var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth);
        document.getElementById('finalave').value = totalVal;
        document.getElementById('finalave').value = Math.round((parseInt(totalVal) / 4));
    }
    </script>
</body>

</html>
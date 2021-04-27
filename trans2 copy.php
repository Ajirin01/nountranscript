<?php require_once ("includes/initialize.php"); ?>
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
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.ttf">

    <link rel="stylesheet" href="css/signature.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.modal.css" type="text/css" media="screen" />


    <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo WEB_ROOT; ?>template/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo WEB_ROOT; ?>template/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo WEB_ROOT; ?>template/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                            class="fas fa-th-large"></i></a>
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
                                <?Php echo $_SESSION['FNAME'];?>
                            </label> <label>
                                <?Php echo $_SESSION['LNAME'];?>
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
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>index.php?page=2" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>index.php?page=3" class="nav-link">
                                        <i class="fa fa-book nav-icon"></i>
                                        <p>Records</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
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

                        <?php
    $mydb->setQuery("SELECT * 
    FROM tblstudent WHERE IDNO=".$_GET['studentId']);
    $cur = $mydb->loadResultList();
    foreach($cur as $object){


?>
                        <div class="text text-primary text-right print-btn" style="font-size: 2rem; cursor: pointer">
                            <i class="glyphicon glyphicon-print"></i> <span>print</span>
                        </div>
                        <page id="el">
                            <img src="uploads/noun_bg.jpg" alt=""
                                style="width: 100%; position: absolute; z-index: -1000; top: 0">
                            <!-- <div class="container"
        style="background-image: url('uploads/noun_bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat"> -->
                            <div class="container"
                                style=" z-index: -500; position: relative; top: 0; left: 0; margin: 0 auto;">

                                <div class="page-header">
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <H6>NAME: <?php echo $object->LNAME . ' '.$object->FNAME; ?></H6>
                                        </div>
                                        <div class="col-xs-6" align="right"><B></B></div>
                                        <!--         <div class="col-xs-4">One third</div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <H6>DATE OF BIRTH: <?php echo $object->BDAY; ?></h6>
                                        </div>
                                        <div class="col-xs-6" align="right">
                                            <H6>REG NO.: <?php echo $object->IDNO; ?></H6>
                                        </div>
                                        <!--         <div class="col-xs-4">One third</div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <H6>PLACE OF BIRTH: <?php echo $object->BPLACE;  ?></H6>
                                        </div>
                                    </div>


                                    <?php
                    }
            ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" align="Left">
                                        <H6>ACADEMIC YEAR: <?php echo $_GET['ay']; ?> </h6>
                                    </div>
                                    <div class="col-xs-6" align="right"></div>
                                    <!--         <div class="col-xs-4">One third</div> -->
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <H6>PROGRAM : UNDERGRADUTE DEGREE</H6>
                                    </div>
                                    <div class="col-xs-6" align="right">
                                        <h6 align="Right">GRADE SYSTEM</h6>
                                    </div>
                                    <!--         <div class="col-xs-4">One third</div> -->
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <H6>FACULTY : <?php //echo $object->FAC;  ?></H6>
                                    </div>
                                    <div class="col-xs-6" align="right">
                                        <h6 align="Left"></h6>
                                    </div>
                                    <!--         <div class="col-xs-4">One third</div> -->
                                </div>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <H6>DEPARTMENT: MATHEMATICS</H6>
                                    </div>
                                    <div class="col-xs-3" align="left">

                                        A 4.00GP 80-100% EXCELLENT<br />
                                        B+ 3.50GP 70-79% VERY GOOD<br />
                                        B 3.00GP 60-69% GOOD<br />
                                        C+ 2.50GP 55-59% FAIR<br />
                                        C 2.00GP 50-54% AVERAGE<br />
                                        D+ 1.50GP 45-49% BELOW AVERAGE<br />

                                    </div>
                                    <div class="col-xs-3" align="Left">
                                        <p>

                                            D 1.00GP 40-44% POOR<br />
                                            F 0.00GP 0-39% FAIL<br />
                                            GPTS GRADE POINTS GPA GRADE POINT AVERAGE <br />
                                            CV CREDIT VALUE CGPA COMMULATIVE GPA<br />
                                    </div>

                                    <!--         <div class="col-xs-4">One third</div> -->
                                </div>

                                <table style="width:100%;">
                                    <tr>
                                        <td align="left" id="table">
                                            <table style="width:100%;" border="0">
                                                <tr>
                                                    <th align="left" width="50" class="bottom"><strong>Code</strong>
                                                    </th>
                                                    <th align="left" width="150" class="bottom"><strong>Course
                                                            Title</strong></th>
                                                    <th align="left" width="30" class="bottom"><strong>GPTS</strong>
                                                    </th>
                                                    <th align="left" width="30" class="bottom"><strong>CV</strong></th>
                                                    <th align="left" width="30" class="bottom"> <strong>GRADE</strong>
                                                    </th>
                                                </tr>
                                                <?php
                            $mydb->setQuery("SELECT * , 
                                        CASE 
                                        WHEN  `AVE` = 4.00  THEN 'A'
                                        WHEN  `AVE` BETWEEN 3.50 AND 3.99 THEN  'B+'
                                        WHEN  `AVE` BETWEEN 3.00 AND 3.49 THEN  'B'
                                        WHEN  `AVE` BETWEEN 2.50 AND 2.99 THEN  'C+'
                                        WHEN  `AVE` BETWEEN 2.00 AND 2.49 THEN  'C'
                                        WHEN  `AVE` BETWEEN 1.50 AND 1.99 THEN  'D+'
                                        WHEN  `AVE` BETWEEN 1.00 AND 1.49 THEN  'D'
                                        WHEN  `AVE` = 0.00 THEN  'F'
                                        END  'Grade'
                                        FROM  `subject` s, `grades` g
                                        WHERE s.`SUBJ_ID`=g.`SUBJ_ID`
                                        AND s.`SEMESTER`= 'First' 
                                        AND  `IDNO` = '{$_GET['studentId']}' AND g.`SYID`='{$_GET['cid']}'");
                            
                                    
                            $cur1 = $mydb->loadResultList();
                            $res = $mydb->executeQuery();
                            $res_count = $mydb->num_rows($res);
                            $target_record = 10;
                            
                            $remaining_record = $target_record - $res_count;

                            $mydb->setQuery("SELECT round(SUM(  `AVE` ) / COUNT( `AVE` )) AS GPA
                                        FROM  `subject` s, `grades` g
                                        WHERE s.`SUBJ_ID`=g.`SUBJ_ID` 
                                        AND s.`SEMESTER`= 'First' 
                                        AND  `IDNO` = '{$_GET['studentId']}' AND g.`SYID`='{$_GET['cid']}'");
                            $GP1 = $mydb->loadResultList();
                            
                            
                            foreach($cur1 as $object1){

                            echo '<tr >
                                <td class="">'.$object1->SUBJ_CODE.'</td>
                                <td class="">'.$object1->SUBJ_DESCRIPTION.'</td>
                                <td class="">'.$object1->AVE.'</td>
                                <td class="">'.$object1->UNIT.'</td>
                                <td class="">'.$object1->Grade.'</td>
                                </tr>';
                            }
                            $i = 1;
                            while ($i <= $remaining_record ) {
                                echo '<tr><td>&nbsp;</td></tr>';
                                $i++;
                            }
                        ?>

                                                <tr>
                                                    <?php
                                foreach($GP1 as $GPA1){
                                echo '<td colspan="5"><strong>Semester 1 GPA: '.$GPA1->GPA . '</strong></td>'; }?>
                                                </tr>
                                            </table>
                                            <!--end of left table-->
                                        </td>
                                        <td align="right">
                                            <table style="width:100%;" border="0">
                                                <tr>
                                                    <th align="left" width="50" class="bottom"><strong>Code</strong>
                                                    </th>
                                                    <th align="left" width="150" class="bottom"><strong>Course
                                                            Title</strong></th>
                                                    <th align="left" width="30" class="bottom"><strong>GPTS</strong>
                                                    </th>
                                                    <th align="left" width="30" class="bottom"><strong>CV</strong></th>
                                                    <th align="left" width="30" class="bottom"> <strong>GRADE</strong>
                                                    </th>
                                                </tr>

                                                <?php
                                $mydb->setQuery("SELECT * , 
                                            CASE 
                                            WHEN  `AVE` = 4.00  THEN 'A'
                                            WHEN  `AVE` BETWEEN 3.50 AND 3.99 THEN  'B+'
                                            WHEN  `AVE` BETWEEN 3.00 AND 3.49 THEN  'B'
                                            WHEN  `AVE` BETWEEN 2.50 AND 2.99 THEN  'C+'
                                            WHEN  `AVE` BETWEEN 2.00 AND 2.49 THEN  'C'
                                            WHEN  `AVE` BETWEEN 1.50 AND 1.99 THEN  'D+'
                                            WHEN  `AVE` BETWEEN 1.00 AND 1.49 THEN  'D'
                                            WHEN  `AVE` = 0.00 THEN  'F'
                                            END  'Grade'
                                            FROM  `subject` s, `grades` g
                                            WHERE s.`SUBJ_ID`=g.`SUBJ_ID` 
                                            AND s.`SEMESTER`= 'Second' 
                                            AND  `IDNO` = '{$_GET['studentId']}' AND g.`SYID`='{$_GET['cid']}'");
                                $cur2 = $mydb->loadResultList();
                                $res = $mydb->executeQuery();
                                $res_count = $mydb->num_rows($res);
                                $target_record = 10;
                                
                                $remaining_record = $target_record - $res_count;      
                                foreach($cur2 as $object2){

                                echo '<tr >
                                <td class="">'.$object2->SUBJ_CODE.'</td>
                                <td class="">'.$object2->SUBJ_DESCRIPTION.'</td>
                                <td class="">'.$object2->AVE.'</td>
                                <td class="">'.$object2->UNIT.'</td>
                                <td class="" align="center">'.$object2->Grade.'</td>
                                </tr>';
                                }
                                $i = 1;
                                while ($i <= $remaining_record ) {
                                    echo '<tr><td>&nbsp;</td></tr>';
                                    $i++;
                                }
                            ?>
                                                <tr>

                                                    <?php
                                $mydb->setQuery("SELECT round(SUM(  `AVE` ) / COUNT( `AVE` )) AS GPA
                                        FROM  `subject` s, `grades` g
                                        WHERE s.`SUBJ_ID`=g.`SUBJ_ID` 
                                        AND s.`SEMESTER`= 'Second' 
                                        AND  `IDNO` = '{$_GET['studentId']}'  AND g.`SYID`='{$_GET['cid']}'");
                                $GP2 = $mydb->loadResultList();       
                                foreach($GP2 as $GPA2){
                                echo '<td colspan="5"><strong>Semester 2 GPA: '.$GPA2->GPA.'</strong></td>';
                                } 
                            ?>
                                                </tr>
                                            </table>
                                            <!--end of right table-->
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <?php
                    $mydb->setQuery("SELECT round(SUM(  `AVE` ) / COUNT( `AVE` )) AS GPA
                                FROM  `subject` s,`grades` g
                                WHERE s.`SUBJ_ID`=g.`SUBJ_ID` 
                                AND  `IDNO` = '{$_GET['studentId']}' AND g.`SYID`='{$_GET['cid']}'");
                        $AnnualGP1 = $mydb->loadResultList();    
                        // echo json_encode($AnnualGP1);   
                        foreach($AnnualGP1 as $AnnGPA){
                            echo '<td colspan="2" align="center"><h4>ANNUAL GPA: '.$AnnGPA->GPA.'</h4></td>';
                        }
                ?>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="center">
                                            <h4>TRANSCRIPT IS ONLY VALID WITH THIS SIGNATURE</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <!-- <table class="" style="width:100%; " border="0">
                            <td></td>
                            <td align="center" class="top bottom left right">&nbsp;</td>
                            <td style="width:300px; height: 140px"><img id="signature" src="" alt="Your signature will go here!"/></td>
                            <td></td>
                        </table> -->
                                            <div style="width:500px; height: 140px"><img
                                                    style="max-width: 300px; max-height: 140px; margin-left: 100px"
                                                    id="signature" src="" /></div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <?php
                    $mydb->setQuery("SELECT HEX(CONCAT(IDNO, AGE)) as serialno 
                    FROM tblstudent WHERE  IDNO=".$_GET['studentId']);
                    $cur = $mydb->loadResultList();
                    foreach($cur as $object){


                ?>
                                        <td>
                                        </td>
                                        <td>
                                            <table class="" style="width:100%;" border="0">
                                                <td></td>
                                                <td align="center"><strong><?php echo $object->serialno; ?></strong>
                                                </td>
                                                <?php
                            }
                        ?>
                                                <td></td>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </page>

                        <!-- Content -->
                        <div id="ex1" class="modal">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sx-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>E-Signature</h1>
                                                <p>Sign in the canvas below and save your signature as an image!</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <canvas id="sig-canvas" width="inherit" height="160">
                                                    Get a better browser!.
                                                </canvas>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary" id="sig-submitBtn">Submit
                                                    Signature</button>
                                                <button class="btn btn-default" id="sig-clearBtn">Clear
                                                    Signature</button>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row" style="display: none">
                                            <div class="col-md-12">
                                                <textarea id="sig-dataUrl" class="form-control"
                                                    rows="5">Data URL for your signature will go here!</textarea>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img id="sig-image" src="" alt="Your signature will go here!" />
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="m-t-20"> <a href="#" id="continue" class="btn btn-primary text-center"
                                    rel="modal:close">Continue</a></div>
                            <div class="m-t-20"> <a href="#" id="" class="btn btn-danger text-center"
                                    rel="modal:close">Cancel</a></div>
                        </div>

                        <div class="">
                            <div class="col-md-12">
                                <p>Please Select Signature or Sign online</p>

                                <p>
                                    <a href="#ex1" rel="modal:open" class="btn btn-primary">Sign Online</a>
                                    <input class="btn btn-primary" type="file" name="" id="sign-select"
                                        accept=".jpg, .jpeg, .png" style="display: none">
                                    <a href="#ex1" class="btn btn-primary" id="select-sig-btn">Select Signature</a>

                                </p>

                            </div>
                        </div>


                        <div class="text text-primary text-right print-btn" style="font-size: 2rem; cursor: pointer">
                            <i class="glyphicon glyphicon-print"></i> <span>print</span>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <script>
        var element = document.getElementById('element')
        var el = document.getElementById('el')

        console.log(el)
        element.innerHTML = (el.innerHTML)
        </script>

        <hr>
        <footer>
            <p align="center">&copy; 2020 - <a href="http://www.digi-realm.com.ng/">Digi-Realm City Solution</a></p>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/signature.js"></script>
</body>

</html>
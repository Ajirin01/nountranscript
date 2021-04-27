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
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>fonts/glyphicons-halflings-regular.ttf">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/signature.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/bootstrap.css">
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
                    <a href="index.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- <a href="#" class="nav-link">Contact</a> -->
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link print-btn text text-primary" data-toggle="dropdown" href="#"
                        style="font-size: 2rem; cursor: pointer">
                        <i class="glyphicon glyphicon-print"></i> <span>print</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4"
            style="min-height: 100px !important; position: fixed">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="<?php echo WEB_ROOT; ?>index.php?page=2" class="d-block"><label>
                                <?Php echo $_SESSION['FNAME'];?>
                                </lable>
                                <label>
                                    <?Php echo $_SESSION['LNAME'];?>
                                    </lable>
                        </a>
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
        <div class="container">
            <!-- Main content -->
            <div class="content">
                <!-- <div class="container-fluid">
                    <div class="row"> -->
                <?php check_message(); ?>

                <?php
                            $mydb->setQuery("SELECT * 
                            FROM tblstudent WHERE IDNO=".$_POST['studentId']);
                            $cur = $mydb->loadResultList();
                            foreach($cur as $object){


                        ?>
                <!-- <div class="text text-primary text-right print-btn" style="font-size: 2rem; cursor: pointer">
                            <i class="glyphicon glyphicon-print"></i> <span>print</span>
                        </div> -->
                <page id="el">
                    <img src="<?php echo WEB_ROOT; ?>uploads/noun_bg.jpg" alt=""
                        style="width: 100%; position: absolute; z-index: -1000; top: 0">
                    <!-- <div class="container"
                        style="background-image: url('uploads/noun_bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat"> -->
                    <div class="container" style=" z-index: -500; position: relative; top: 0; left: 0; margin: 0 auto;">

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
                                <H6>ACADEMIC YEAR: <?php echo $_POST['ay']; ?> </h6>
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
                                        AND  `IDNO` = '{$_POST['studentId']}' AND g.`SYID`='{$_POST['cid']}'");
                            
                                    
                            $cur1 = $mydb->loadResultList();
                            $res = $mydb->executeQuery();
                            $res_count = $mydb->num_rows($res);
                            $target_record = 10;
                            
                            $remaining_record = $target_record - $res_count;

                            $mydb->setQuery("SELECT round(SUM(  `AVE` ) / COUNT( `AVE` )) AS GPA
                                        FROM  `subject` s, `grades` g
                                        WHERE s.`SUBJ_ID`=g.`SUBJ_ID` 
                                        AND s.`SEMESTER`= 'First' 
                                        AND  `IDNO` = '{$_POST['studentId']}' AND g.`SYID`='{$_POST['cid']}'");
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
                                            AND  `IDNO` = '{$_POST['studentId']}' AND g.`SYID`='{$_POST['cid']}'");
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
                                        AND  `IDNO` = '{$_POST['studentId']}'  AND g.`SYID`='{$_POST['cid']}'");
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
                                AND  `IDNO` = '{$_POST['studentId']}' AND g.`SYID`='{$_POST['cid']}'");
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
                                            id="signature" src="<?php echo $_POST['image'];?>" /></div>
                                </td>

                            </tr>
                            <tr>
                                <?php
                    $mydb->setQuery("SELECT HEX(CONCAT(IDNO, AGE)) as serialno 
                    FROM tblstudent WHERE  IDNO=".$_POST['studentId']);
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
                <!-- <div class="text text-primary text-right save-btn" style="font-size: 2rem; cursor: pointer">
                    <i class="glyphicon glyphicon-save" style="margin-left: 5px"> </i>
                    <span>save</span>
                </div> -->
                <div class="text text-primary text-right print-btn" style="font-size: 2rem; cursor: pointer">
                    <i class="glyphicon glyphicon-print" style="margin-left: 5px"> </i>
                    <span>print</span>
                </div>
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
    <!-- C:\wamp64\www\transcript\studentTrans\js\signature.js -->
    <!-- jQuery -->
    <script src="<?php echo WEB_ROOT; ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo WEB_ROOT; ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo WEB_ROOT; ?>template/dist/js/adminlte.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
    <script>
    function PrintElem(elem) {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' + document.title + '</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        // console.log(mywindow)
        mywindow.print();
        mywindow.close();

        return true;
    }
    $('.print-btn').on('click', function() {
        console.log('print button clicked')
        PrintElem('el')
    })
    </script>

</body>

</html>
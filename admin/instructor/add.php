<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lecturer Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.dataTables.js"></script>

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

    <!-- Custom styles for this template -->
    <link href="/css/offcanvas.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php
include '../../includes/initialize.php';
check_message(); ?>
        <form class="form-horizontal col-12 span4" action="controller.php?action=add" method="POST">

            <fieldset>
                <legend>New Lecturers</legend>


                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="name">Fullname:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="name" name="name" placeholder="Account Name"
                                type="text" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="address">Current Address:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="address" name="address"
                                placeholder="Current Address" type="text" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="Gender">Gender:</label>

                        <div class="col-md-8">
                            <select class="form-control input-sm" name="Gender" id="Gender">
                                <option value="M">Male</option>
                                <option value="F">Female</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="civilstats">Civil Status:</label>

                        <div class="col-md-8">
                            <select class="form-control input-sm" name="civilstats" id="civilstats">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="specialization">Specialization:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="specialization" name="specialization"
                                placeholder="Specialization" type="text" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="empStats">Employment Status:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="empStats" name="empStats"
                                placeholder="Employment Status" type="text" value="">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="email">Email Address:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="email" name="email" placeholder="Email Address"
                                type="email" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="pass">Password:</label>

                        <div class="col-md-8">
                            <input name="deptid" type="hidden" value="">
                            <input class="form-control input-sm" id="pass" name="pass" placeholder="Account Password"
                                type="Password" value="">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="idno"></label>

                        <div class="col-md-8">
                            <button class="btn btn-default" name="savefaculty" type="submit"><span
                                    class="glyphicon glyphicon-floppy-save"></span> Save</button>
                        </div>
                        <a href="/eportal">Student Transcript Processing System</a>
                    </div>
                </div>


            </fieldset>


        </form>
    </div>
    <!--End of container-->
</body>

</html>
<form class="form-horizontal col-12 span4" action="controller.php?action=add" method="POST">


    <fieldset>
        <legend>New Faculty</legend>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="facultyname">Faculty Name</label>

                <div class="col-md-8">
                    <input name="deptid" type="hidden" value="">
                    <input class="form-control input-sm" id="facultyname" name="facultyname" placeholder="Faculty Name"
                        type="text" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="faculty_description">Faculty Description</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="faculty_description" name="faculty_description"
                        placeholder="Faculty Description" type="text" value="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                    <button class="btn btn-default" name="save" type="submit"><span
                            class="glyphicon glyphicon-floppy-save"></span> Save</button>
                </div>
            </div>
        </div>


    </fieldset>

    <div class="form-group">
        <div class="rows">
            <div class="col-md-6">
                <label class="col-md-6 control-label" for="otherperson"></label>

                <div class="col-md-6">

                </div>
            </div>

            <div class="col-md-6" align="right">


            </div>

        </div>
    </div>

</form>


</div>
<!--End of container-->
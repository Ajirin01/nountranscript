<?php

$facultyid = $_GET['id'];
$singlefaculty = new Faculty();
$object = $singlefaculty->single_dept($facultyid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $facultyid;?>" method="POST">

          <fieldset>
            <legend>Edit Faculty</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "facultyname">Faculty Name</label>

                      <div class="col-md-8">
                        <input name="facultyid" type="hidden" value="<?php echo $object->FACULTY_ID;?>">
                         <input class="form-control input-sm" id="facultyname" name="facultyname" placeholder=
                            "Faculty Name" type="text" value="<?php echo $object->FACULTY_NAME;?>">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "faculty_description">Faculty Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="faculty_description" name="faculty_description" placeholder=
                            "Faculty Description" type="text" value="<?php echo $object->FACULTY_DESC;?>">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" >Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      
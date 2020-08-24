<?php

$subjid = $_GET['id'];
$singlesubject = new Subject();
$object = $singlesubject->single_subject($subjid);

?>
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $subjid;?>" method="POST">

<fieldset>
	<legend>Edit Course</legend>
										

		<div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjcode">Course Code</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
								  "Subject Code" type="text" value="<?php echo $object->SUBJ_CODE;?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjdesc">Course Description</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
								  "Subject Description" type="text" value="<?php echo $object->SUBJ_DESCRIPTION;?>">
          </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "unit">No of units</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="unit" name="unit" placeholder=
								  "No of units" type="number" value="<?php echo $object->UNIT;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "pre">Prerequisite</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="pre" name="pre" placeholder=
								  "Prerequisite" type="text" value="<?php echo $object->PRE_REQUISITE;?>">
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "course">Year level</label>

          <div class="col-md-8">
           <select class="form-control input-sm" name="course" id="course">
           <?php
              $level = new Level();
              $cur = $level->allLevel(); 
              foreach ($cur as $level) {
                echo '<option value="'. $level->YR_ID.'">'.$level->LEVEL.' </option>';
              }

              ?>
					
				</select>	
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "ay">Academic Year</label>

          <div class="col-md-8">
            <select class="form-control input-sm" name="ay" id="ay">
            <?php 
              for($i=0; $i<30; $i++){
                echo "<option value=".(2013+$i)."-".(2014+$i).">".(2013+$i)."-".(2014+$i)."</option>";
              }
            ?>
			</select>	
          </div>
        </div>
      </div>
	  <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "Semester">Semester</label>

          <div class="col-md-8">
             <select class="form-control input-sm" name="Semester" id="Semester">
				<option value="First">First</option>
				<option value="Second">Second</option>	
			</select>
			 <!--  <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Prerequisite" type="hidden" value="First"> -->
         </div>
        </div>
      </div>
	<?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
	 <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
            <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
          </div>
        </div>
      </div>';
    }
    ?>

		
</fieldset>	

				
</form>
</div><!--End of container-->
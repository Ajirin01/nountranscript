<?php

$levelid = $_GET['id'];
$singlelevel = new Level();
$object = $singlelevel->single_level($levelid);

?>
<?php
    check_message();
      
    ?>

<form class="form-horizontal col-12 span6" action="controller.php?action=edit&id=<?php echo $levelid;?>" method="POST">

    <fieldset>
        <legend>Edit Level</legend>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="levelname">Level Name</label>

                <div class="col-md-8">
                    <input name="levelid" type="hidden" value="<?php echo $object->YR_ID;?>">
                    <input class="form-control input-sm" id="levelname" name="levelname" placeholder="Level Name"
                        type="text" value="<?php echo $object->LEVEL;?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="level_description">Level Description</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="level_description" name="level_description"
                        placeholder="Level Description" type="text" value="<?php echo $object->LEVEL_DESCRIPTION;?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                    <button class="btn btn-primary" name="save" type="submit">Save</button>
                </div>
            </div>
        </div>


    </fieldset>

</form>
</div>
<!--End of well-->

</div>
<!--End of container-->
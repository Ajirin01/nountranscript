<?php
		check_message();
			
		?>
<div class="col-12">

    <form action="controller.php?action=delete" Method="POST">
        <table class="table table-hover">
            <caption>
                <h3 align="left">Transcript Requests</h3>
            </caption>
            <thead>
                <tr>
                    <th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
                        Transcript Request ID</th>
                    <th>Transcript Link</th>
                    <th>Transcript Request Status</th>

                </tr>
            </thead>
            <tbody>
                <?php 
				  		$TranscriptProcess = new TranscriptProcess();
						$cur = $TranscriptProcess->listOftranscriptProcess();
						if( count($cur) > 0){
						foreach ($cur as $transcriptprocess) {
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$transcriptprocess->REQUEST_ID . '"/>
				  				<a href="index.php?view=edit&id='.$transcriptprocess->REQUEST_ID .'">' . $transcriptprocess->REQUEST_ID.'</a></td>';
						echo '<td colspan="3">'. $transcriptprocess->url.'</td>';
						echo '<td colspan="3">'. $transcriptprocess->status.'</td>';
				  		echo '</tr>';
					  } 
					}else{
						echo "<td>no records</td>";
						echo "<td>no records</td>";
						echo "<td>no records</td>";
					}
				  	?>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
    </form>
</div>
<!--End of well-->

</div>
<!--End of container-->
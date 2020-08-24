<?php

session_start();

unset($_SESSION['IDNO']);
unset($_SESSION['FNAME']);
unset($_SESSION['LNAME']);
unset($_SESSION['MNAME']);
unset($_SESSION['SEX']);    
unset($_SESSION['BDAY']); 
?>
<script type="text/javascript">
		window.location = "index.php?logout=1";
	</script>
	<?php	
?>
<?php

session_start();

unset($_SESSION['IDNO']);
unset($_SESSION['FNAME']);
unset($_SESSION['LNAME']);
unset($_SESSION['MNAME']);
unset($_SESSION['SEX']);    
unset($_SESSION['BDAY']);
session_destroy(); 
?>

<script type="text/javascript">
window.location = "login.php";
</script>
<?php	
?>
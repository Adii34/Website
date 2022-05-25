<?php 
session_start();
session_destroy();
unset($_SESSION['Username']);
echo "<script type='text/javascript'>alert('Delogarea s-a realizat cu succes!!');
document.location='index.php'</script>";




?>


<?php  session_start(); 

include('database_connection.php');


?>

<?php   

$query="DELETE from coscumparaturi";
mysqli_query($conn,$query);

echo "<script type='text/javascript'>alert('Rezervarile au fost anulate!!!');
document.location='VizualizareCos.php'</script>";



 



?>

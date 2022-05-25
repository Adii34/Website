

<?php  session_start(); 

include('database_connection.php');


?>

<?php   

$query="DELETE from coscumparaturi where ID=$_GET[pid]";
mysqli_query($conn,$query);
echo "<script type='text/javascript'>alert('Anularea a fost facuta cu succes!!!');
document.location='VizualizareCos.php'</script>";





 



?>


<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;

}
p  {
  color: red;
  font-family: courier;
  font-size: 160%;

  
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<?php  session_start(); 

include('database_connection.php');


?>

<?php   

$query="Select * from contactus where ID=$_GET[pid]";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

$Nume=$row['FirstName'];
$Prenume=$row['LastName'];
$Subiect=$row['Subject'];

echo "<h1>Email de la $Nume $Prenume <h1>";

echo "<p>$Subiect<p>"







 



?>

<a href="admin.php" class="button">Inapoi la pagina de admin</a>

</body>
</html>
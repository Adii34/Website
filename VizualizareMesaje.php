

<?php  session_start(); 

include('database_connection.php');
?>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:blue;

}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:blue;

}

tr:nth-child(even) {
  background-color: #dddddd;
  
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

<?php
if(isset($_POST["VedetiEmail"]))
{
  
    $query="SELECT *from contactus ";
    $result=mysqli_query($conn,$query);
    $nr=mysqli_num_rows($result);

    if($nr>0){

        echo "<table>";
        echo  "<tr>";
        echo "<th>Nume</th>";
        echo "<th>Prenume</th>";
        echo "<th>Email</th>";

       
        echo "</tr>";
        
     while($row=mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$row['FirstName']."</td>";
         echo "<td>".$row['LastName'] ."</td>";
         echo "<td>".$row['Email'] ."</td>";
        
 
         ?>
 
 <td><button type="submit"  onClick='window.location.href = "CitireMesaj.php?pid=<?php echo $row['ID']?>"' name="VedetiMesajul">Vzualizare mesaj</button></td>
   
      <?php echo "</tr>";
 
     }
 
     echo "</table>";
 
 
 }else{
     echo "<script type='text/javascript'>alert('Momentan nu ai niciun mesaj facute!!!');
     document.location='admin.php'</script>";
 }

}


?>

<a href="admin.php" class="button">Inapoi la pagina de admin</a>
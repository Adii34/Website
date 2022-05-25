<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="HoteluriStyle.css">
       
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">

        <style>
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

include('database_connection.php');

?>
<?php   



/*Vizualizare Rezervari*/

if(isset($_POST["VedetiRezervari"]))
{
  
    $query="SELECT *from rezervari ";
    $result=mysqli_query($conn,$query);
    $nr=mysqli_num_rows($result);

    if($nr>0){

        echo "<table>";
        echo  "<tr>";
        echo "<th>Nume</th>";
        echo "<th>Hotel</th>";
        echo "<th>Check In</th>";
        echo "<th>Check Out</th>";
        echo "<th>Numar Adulti</th>";
        echo "<th>Numar Copii</th>";
        echo "<th>Numar Camere</th>";
        echo "<th>Pret</th>";

        echo "</tr>";
        
     while($row=mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$row['Nume']."</td>";
         echo "<td>".$row['Hotel'] ."</td>";
         echo "<td>".$row['CheckIn'] ."</td>";
         echo "<td>". $row['CheckIn']."</td>";
         echo "<td>". $row['NrAdulti'] ."</td>";
         echo "<td>" . $row['NrCopii']. "</td>";
         echo "<td>" . $row['NrCamere']. "</td>";
         echo "<td>" .$row['Pret'] ."</td>";
 
         ?>
 

      <?php echo "</tr>";
 
     }
 
     echo "</table>";
 
 
 }else{
     echo "<script type='text/javascript'>alert('Momentan nu sunt rezervari facute!!!');
     document.location='admin.php'</script>";
 }



}


?>









<?php 
/*Adauga Hotel*/

if(isset($_POST["AdaugaHotel"]))
{
    $facilitate1=$_POST['Facilitate1'];
    $facilitate2=$_POST['Facilitate2'];
    $facilitate3=$_POST['Facilitate3'];
    $Nume=$_POST['NumeHotel'];
    $Oras=$_POST['LocalitateHotel'];
    $Poza=$_POST['Poza'];
    $Pret=$_POST['Pret'];
    $Rating=$_POST['Rating'];
    $camera1=$_POST['Camera1'];
    $camera2=$_POST['Camera2'];
    $camera3=$_POST['Camera3'];
    $camera4=$_POST['Camera4'];
    $TipHotel=$_POST['TipHotel'];

    
   

 $insert="INSERT into hoteluri values('','$Nume',' $Oras',' $Poza',' $Pret',' $Rating','$facilitate1','$facilitate2','$facilitate3','  $camera1','$camera2','$camera3','$camera4','$TipHotel')";
     mysqli_query($conn,$insert);
     echo "<script type='text/javascript'>alert('Hotelul a fost adaugat cu succes!!!');
document.location='admin.php'</script>";
}



?>


<?php 
/*Adauga cont */


if(isset($_POST["AdaugaCont"]))
{
   $Nume=$_POST['FirstName'];
   $UserName=$_POST['Name'];
   $Email=$_POST['Email'];
   $Phone=$_POST['Phone'];
   $Parola=$_POST['Password'];
   $TipUtilizator=$_POST['TipUtilizator'];
  
 




   $insert="INSERT into utilizatori values('','$Nume','$UserName','$Email','$Phone',' $Parola','$TipUtilizator')";
   mysqli_query($conn,$insert);

   echo "<script type='text/javascript'>alert('Utilizatorul a fost adaugat cu succes!!!');
   document.location='admin.php'</script>";
   

}



?>

<?php

if(isset($_POST["StergeCont"]))
{

 
$parola=$_POST['Password'];
$username=$_POST['UserName'];

$Select="Select * from utilizatori";
$result=mysqli_query($conn,$Select);
  


 
 while($row=mysqli_fetch_array($result))
  {
    
         $Nume=$row['Username'];
       echo "$Nume == $username";
      if($username == $Nume)
      {
         echo "Merge";
         
          $delete="DELETE from utilizatori where Username='$username'";
          mysqli_query($conn,$delete);
          $deleteRezervari="DELETE from rezervari where Nume='$username'";
          mysqli_query($conn,$deleteRezervari);
          echo "<script type='text/javascript'>alert('Utilizatorul a fost sters cu succes!!!');
          document.location='admin.php'</script>";

      }
      else{
      
      echo "Nu merge \n";
       
      }

  }

}



?>

<a href="admin.php" class="button">Inapoi la pagina de admin</a>


<head>
    </html>


    
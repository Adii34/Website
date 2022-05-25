<?php  session_start(); 

include('database_connection.php');


?>


<?php 


$Nume=$_SESSION['id'];



$query="Select *from coscumparaturi";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
    $Hotel=$row['Hotel'];
    $CheckIn=$row['CheckIn'];
    $CheckOut=$row['CheckOut'];
    $NrAdult=$row['NrAdulti'];
    $NrChildren=$row['NrCopii'];
    $NrRooms=$row['NrCamere'];
    $Pret=$row['Pret'];



    $insert="INSERT into rezervari values('','$Nume' ,'$Hotel','$CheckIn','$CheckOut','$NrAdult' ,'$NrChildren','$NrRooms','$Pret')";
    mysqli_query($conn,$insert);

  
 

   
}

$delete="DELETE from coscumparaturi";
mysqli_query($conn,$delete);
echo "<script type='text/javascript'>alert('Rezervarea a fost facuta cu succes!!!');
document.location='index.php'</script>";

?>
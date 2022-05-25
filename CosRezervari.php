<?php  session_start(); 

include('database_connection.php');

if(empty($_SESSION['id'])){
 
   echo  "<script type='text/javascript'>alert('Trebuie sa te loghezi ca sa poti face o rezervare!!!');
    document.location='Login.php'</script>";
}
?>



<?php    

if(isset($_POST["BookNow"]))
{
    $CheckIn=$_POST['CheckIn'];
    $CheckOut=$_POST['CheckOut'];
    $NrAdult=$_POST['NrAdult'];
    $NrChildren=$_POST['NrChildren'];
    $NrRooms=$_POST['NrRooms'];
   

}


$datediff=strtotime($CheckOut)-strtotime($CheckIn);
$Numar_Nopti=round($datediff/(60*60*24));




$query="Select *from hoteluri where ID='$_GET[PID]'"; 

$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$Nume=$row['Nume'];

$Pret=$row['Pret'];

$Pret_Total=$Numar_Nopti*$Pret*$NrRooms;

if($CheckIn==NULL || $CheckOut==NULL)
{
    echo "<script type='text/javascript'>alert('Ati completat gresit campurile de Check In si Check Out !!!')</script>";
  
}else
if($CheckIn==$CheckOut){
    echo "<script type='text/javascript'>alert('Nu poti rezerva o singura zi !!!');document.location='Hoteluri.php'</script></script>";

}else{
$insert="INSERT into coscumparaturi values('','$Nume' ,'$CheckIn','$CheckOut','$NrAdult' ,'$NrChildren','$NrRooms','$Pret_Total')";
mysqli_query($conn,$insert);
echo "<script type='text/javascript'>alert('Rezervarea a fost facuta cu succes!!!');
document.location='Hoteluri.php'</script>";
}





?>




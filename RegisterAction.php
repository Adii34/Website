<?php  session_start(); 

include('database_connection.php');
?>

<?php   

 if(isset($_POST["submit"])) {
    $name=$_POST["Nume"];
    $Username=$_POST["Username"];
    $phone=$_POST["phone"];
    $Email=$_POST["Email"];
    $Parola=$_POST["Parola"];
    $ConfirmaParola=$_POST["ConfirmaParola"];
 }

 $duplicate=mysqli_query($conn,"SELECT  *from  utilizatori where Username='$Username' or email='$Email'");
 if(mysqli_num_rows($duplicate)>0) {
     echo 
     "<script> alert('Acest username sau email exista deja');</script>";
 }else{
     if($Parola==$ConfirmaParola){
         $query="INSERT into utilizatori values('','$name','$Username','$Email','$phone','$Parola','user')";
         mysqli_query($conn,$query);
         echo "<script type='text/javascript'>alert('Inregistrarea a fost efectuata cu succes !!!');
     document.location='index.php'</script>";

     }else {
        echo  "<script> alert('Parola nu se potriveste inceraca sa confirmi iar parola');</script>";
     }
 }




?>

<?php  session_start(); 

include('database_connection.php');

if(isset($_POST['login']));{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($conn,$user_unsafe);
    
    $pass = mysqli_real_escape_string($conn,$pass_unsafe);

    $query=mysqli_query($conn,"Select *from utilizatori where Username='$user' and Parola='$pass' ")or die(mysqli_error($conn));

    $row=mysqli_fetch_array($query);

    $name=$row['Username'];
    $counter=mysqli_num_rows($query);
    $id=$row['ID'];
    $Username=$row['Username'];

    if($row['TipUtilizator']=="user"){
        header("location:index.php");
        $_SESSION['id']=$id;
        $_SESSION['id']=$Username;
    }
    if($row['TipUtilizator'] =="admin"){
        header("location:admin.php");
        $_SESSION['id']=$id;
        $_SESSION['Username']=$Username;
    }

    if($counter==0){
        echo "<script type='text/javascript'>alert('Username sau parola introdusa gresit!!');
        document.location='Login.php'</script>";
    }

    


    



}



?>
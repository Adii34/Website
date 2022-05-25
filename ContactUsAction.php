<?php  session_start(); 

include('database_connection.php');
?>

<?php  
if(isset($_POST["Send"])) {
   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];

    $insert="INSERT INTO `contactus`(`ID`, `FirstName`, `LastName`, `Email`, `Subject`) VALUES ('','$firstname','$lastname','$email','$subject')";
    mysqli_query($conn,$insert);
 
    echo "<script type='text/javascript'>alert('Email a fost trimis cu succes!!!');
    document.location='ContactUs.php'</script>";

 }

 ?>
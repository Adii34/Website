<?php 
$conn=mysqli_connect("localhost","root","","proiectweb");

if(mysqli_connect_errno()){
    echo"Conexiunea nu a avut loc cu baza de date:". mysqli_connect_error();

}

?>
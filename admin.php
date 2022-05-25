
<?php
 session_start();

if(empty($_SESSION['id'])):
  header('Location:Login.php');
endif;




?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>


<button  type='submit'  onClick='window.location.href = "Logout.php?"' class="btn">LOG OUT</button>

<div class="Adauga Cont" id="AdaugaCont">
<form action="adminAction.php" method="POST">

   <h1>Vedeti rezervari</h1>

   <input type="submit" name="VedetiRezervari" value="Vedeti Rezervari">


    
    <br><br>
</form>


   
</div>

<div class="Adauga Cont" id="AdaugaCont">
<form action="VizualizareMesaje.php" method="POST">

   <h1>Vedeti emailuri</h1>

   <input type="submit" name="VedetiEmail" value="Mesajele Dumneavoastra">

</form>
    
    <br><br>


   
</div>


<div class="Hotel Nou" id="HotelNou">
<form action="adminAction.php" method="POST">
    <h1>Adauga Hotel</h1>

   
    Nume:<input type=text name=LocalitateHotel><br>
    Poza:<input type=text name=Poza><br>
    Pret:<input type=text name=Pret><br>
    Rating:<input type=text name=Rating><br>
    Camera1:<input type=text name=Camera1><br>
    Camera2:<input type=text name=Camera2><br>
    Camera3:<input type=text name=Camera3><br>
    Camera4:<input type=text name=Camera4><br>
    Facilitate1: <input type=text name=Facilitate1><br>
    Facilitate2: <input type=text name=Facilitate2><br>
    Facilitate3: <input type=text name=Facilitate3><br>
    Oras Hotel: <input type=text name=NumeHotel><br>
 
    TipHotel:<input type=text name=TipHotel><br>


    
        

    
   
    
    <br><br>

    <input type="submit" name="AdaugaHotel" value="Adauga Hotel">
    <input type="reset" name="reset" value="Reset">
</form>
</div>





<div class="Adauga Cont" id="AdaugaCont">
<form action="adminAction.php" method="POST">

   <h1>Adauga Cont</h1>

     Name: <input type=text name=FirstName><br>
     Username: <input type=text name=Name><br>
     Email:<input type=text name=Email><br>
     Phone Number: <input type=text name=Phone><br>
     Password: <input type=text name=Password><br>
     TipUtilizator: <input type=text name=TipUtilizator><br>



    
    <br><br>

    <input type="submit" name="AdaugaCont" value="Adauga Cont">
    <input type="reset" name="reset" value="Reset">
</form>
</div>



<div class="Sterge Cont" id="StergeCont">
<form action="adminAction.php" method="POST">
<h1>Sterge Cont</h1>

     Username: <input type=text name=UserName><br>
     Password: <input type=text name=Password><br>

    <br><br>

    <input type="submit" name="StergeCont" value="Sterge Cont">
    <input type="reset" name="reset" value="Reset">
</form>
</div>
















<script src="main.js"></script>

</body>
</html>


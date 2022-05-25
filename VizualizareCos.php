<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="HoteluriStyle.css">
       
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body>
        
  
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>GOODTRAVEL</span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>
                  
        
        </header>
       
      
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "index.php">HOME</a></li>
                <li><a href = "ContactUs.php">CONTACT US</a></li>
                <li><a href = "Hoteluri.php">HOTELS</a></li>
              
            </ul>

          <form action='Logout.php' method='POST'> 
          <input type='submit' name='submit' value='Log Out' class = 'btn log-in'>
         </form>

         <form action='VizualizareCos.php' method='POST'> 
    
          <input type='submit' name='submit' value='Rezervari' class = 'btn log-in'>
          </form>


             
        </div>


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
</style>

<?php 




$query="SELECT * from coscumparaturi ";

$result=mysqli_query($conn,$query);
$nr=mysqli_num_rows($result);

if($nr>0){

       echo "<table>";
       echo  "<tr>";
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
        echo "<td>".$row['Hotel']."</td>";
        echo "<td>".$row['CheckIn'] ."</td>";
        echo "<td>".$row['CheckOut'] ."</td>";
        echo "<td>". $row['NrAdulti']."</td>";
        echo "<td>". $row['NrCamere'] ."</td>";
        echo "<td>" . $row['NrCopii']. "</td>";
        echo "<td>" .$row['Pret'] ."</td>";

        ?>

     <td><button type="submit"  onClick='window.location.href = "AnulareRezervare.php?pid=<?php echo $row['ID']?>"' name="AnulareRezervare">Anuleaza Rezervarea</button></td>
     <?php echo "</tr>";

    }

    echo "</table>";


}else{
    echo "<script type='text/javascript'>alert('Momentan nu ai nici o rezervare facuta!!!');
    document.location='Hoteluri.php'</script>";
}




?>

<br><br>
<table width="100%">
<td><button type="submit"  positon="center"  onClick='window.location.href = "RezervaAcum.php"' name="AnulareRezervare">Rezerva Acum</button></td>
<td><button type="submit"  onClick='window.location.href = "AnulareToateRezervarile.php"' name="AnulareRezervare">Anuleaza toate rezervarile</button></td>
</table>

<script src="script.js"></script>
    </body>
</html>
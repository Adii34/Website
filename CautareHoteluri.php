<?php   

include('database_connection.php');

session_start();
 if(isset($_POST["Cautare"]))
 {
     $Oras_Cautat=$_POST['Nume_Oras'];
 }

 if(isset($_POST["CautareLogOut"]))
 {
    

   

     echo "<script type='text/javascript'>alert('Trebuie sa fi logat in sistem ca sa poti cauta un oras!!!');
document.location='index.php'</script>";
 }



?>


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
          
            <button onclick="window.location.href='Logout.php'" class = "btn log-in">Log Out</button>
            <form action='CosRezervari.php' method='POST'> 
    
    <input type='submit' name='submit' value='Rezervari' class = 'btn log-in'>
    </form>
        
        </div>


       
   
       

    
 
<?php 


$orase="SELECT Distinct Oras from hoteluri Order By Oras Asc";

$result_orase=mysqli_query($conn,$orase);
$numar_orase=mysqli_num_rows($result_orase);

$nr=0;







        while($row_oras=mysqli_fetch_array($result_orase)){
        $oras_section=$row_oras['Oras'];

        if($Oras_Cautat==$oras_section){
        
        
  echo "<section class=$oras_section>";
  
  
  $query="Select *from hoteluri Order By Oras Asc";
  $result=mysqli_query($conn,$query);                     
  $Numar_Hoteluri=mysqli_num_rows($result);
  $n=$Numar_Hoteluri/3;
  $Ramase=$Numar_Hoteluri%3;


        echo"<div class='Hoteluri'>";
            echo "<br>";
            echo"<br>";
            echo "<div id='Populare' class='populare'>";
                echo "<h1>$oras_section</h1>";
               
                for($k=0;$k<$n;$k++){
                echo "<table>";
              
                    echo"<tr>";

                  while($row=mysqli_fetch_array($result)){
                    $Nume=$row['Nume'];
                    $poza=$row['Poza'];
                    $pret=$row['Pret'];
                    $rating=$row['Rating'];
                    $oras=$row['Oras'];
                    
                    if($oras == $oras_section){
                      
                        
                        echo "<td>";

                            echo "<br>";
                            echo "<br>";
                            echo "<img src=./Poze/$poza>";
                            echo "<br>";
                            echo "<br>";
                           echo "<h3 name='NumeHotel'> $Nume</h3>";
                           for($i=1;$i<=$rating;$i++){
                        echo "<span><i class = 'fas fa-star'></i></span>";
                           }
                           for($i=$rating;$i<5;$i++){
                            echo "<span><i class = 'far fa-star'></i></span>";
                               }
                         
                        
                       
                        echo "<br>";
                            echo "<br>";
                        
                            echo "<p>$ $pret / per night</p>";
                            ?>
                             <button  type='submit'  onClick='window.location.href = "Rezervare.php?pid=<?php echo $row['ID']?>"' class="btn">BOOK NOW</button>;
                          <?php
                        echo "</td>";
                            }

                            }
                            echo "</tr>"; 
                            
                            }
             echo   "</table>";
                


              
                   
                  
                    
            echo "</div>";
      
          
  echo "</section>";
                        }
                        else{
                           $nr++;
                        }
                        }

                        if($nr==$numar_orase)
                        {
                            echo "<script type='text/javascript'>alert('Acest oras nu este disponibil!!!');
                            document.location='index.php'</script>";
                        }




?>

            
        <script src="script.js"></script>
    </body>
</html>
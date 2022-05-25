
<?php
 session_start();
 include('database_connection.php');
/*if(empty($_SESSION['id'])):
  header('Location:Login.php');
endif;*/

?>

<?php


if(isset($_SESSION['mesaj'])){
    echo "Delogare realizata cu succes";
    unset($_SESSION['mesaj']);

}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="indexStyle.css">
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
                   <?php 
                     if(!empty($_SESSION['id'])){
                         $user=  $_SESSION['id'];
                echo "<span>$user<i class='fas fa-user'></i>    </span>";
                     }
                ?>
                <span id = "nav-btn">  MENU <i class = "fas fa-bars"></i></span>
                  
                    
                   
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>ALEGE VACANTA DORITA</h2>
            

                <?php
             if(empty($_SESSION['id'])){

            
        echo "<form action='Login.php' method='POST'> ";
  
        echo "<input type='submit' name='LogIn' value='Get Started' class = 'head-btn'>";
        echo "</form>";

      


           
         

  }else{
     
    echo "<form action='Hoteluri.php' method='POST'> ";
  
    echo "<input type='submit' name='submit' value='Get Started' class = 'head-btn'>";
    echo "</form>";
  }          
  
  
  ?>

            
               
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
          
        
            
         


          <?php 
          if(empty($_SESSION['id'])){

            
            echo "<form action='Login.php' method='POST'> ";
          
            echo "<input type='submit' name='LogIn' value='Log In' class = 'btn log-in'>";
            echo "</form>";

            echo "<form action='Register.php' method='POST'> ";
          
            echo "<input type='submit' name='Register' value='Sign Up' class = 'btn log-in'>";
            echo "</form>";


                   
                 

          }else{
             
            echo "<form action='Logout.php' method='POST'> ";
          
            echo "<input type='submit' name='submit' value='Log Out' class = 'btn log-in'>";
            echo "</form>";

            echo "<form action='VizualizareCos.php' method='POST'> ";
          
            echo "<input type='submit' name='submit' value='Rezervari' class = 'btn log-in'>";
            echo "</form>";
          }          
          
          
          ?>
         

          


        </div>
      

        
        <div id = "modal"></div>
       

     
    

        <div class = "book">
            <form action="CautareHoteluri.php" method="POST" class = "book-form">
                <div class = "form-item">
                    <label for = "city">City: </label>
                    <input type = "text" id = "chekin-date" name="Nume_Oras" placeholder="Type here a city">
                </div>
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date">
                </div>
                <div class = "form-item">
                    <label for = "adult">Adults: </label>
                    <input type = "number" min = "1" value = "1" id = "adult">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children">
                </div>
            
                <div class = "form-item">
                  
          <?php 
          if(empty($_SESSION['id'])){

            
         
          
            echo "<input type='submit' name='CautareLogOut' value='Search' class = 'btn'>";
          

          


                   
                 

          }else{
             
            echo "<input type='submit' name='Cautare' value='Search' class = 'btn'>";
          }          
          
          
          ?>
                </div>
            </form>
        </div>
<?php

    $query="Select *from hoteluri";
    $result=mysqli_query($conn,$query);
    $Numar_Hoteluri=mysqli_num_rows($result);
    
       echo " <section class = 'hotels sec-width' id = 'hotels'>";
            echo "<div class = 'title'>";
                echo "<h2>HOTELURI DE TOP</h2>";
            echo "</div>";

          
            echo "<div class = 'hotels-container'>";
            while($row=mysqli_fetch_array($result)){
                $Nume=$row['Nume'];
                $Poza=$row['Poza'];
                $pret=$row['Pret'];
                $rating=$row['Rating'];
                $oras=$row['Oras'];
                $facilitate1=$row['Facilitate1'];
                $facilitate2=$row['Facilitate2'];
                $facilitate3=$row['Facilitate3'];
               
                if( $row['TipHotel']=="Top"){
                echo "<article class = 'hotel'>";
                    echo "<div class = 'hotel-image'>";
                        echo "<img src =./Poze/$Poza alt = 'hotel image'>";
                    echo "</div>";
                    echo "<div class = 'hotel-text'>";
                        echo "<h3>$Nume</h3>";
                        echo "<ul>";
                            echo "<li>";
                                echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                                echo $facilitate1;
                            echo "</li>";
                            echo "<li>";
                                echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                                echo $facilitate2;
                            echo "</li>";
                            echo "<li>";
                                echo "<i class = 'fas fa-arrow-alt-circle-right'></i>";
                             echo $facilitate3;
                            echo "</li>";
                        echo "</ul>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p class = 'rate'>";
                            echo "<span>$ $pret /</span> Per Night";
                        echo "</p>";
                        ?>
                         <button  type='submit'  onClick='window.location.href = "Rezervare.php?pid=<?php echo $row['ID']?>"' class="btn">BOOK NOW</button>
                        <?php
                    echo "</div>";
                echo "</article>";
                }
            }
                ?>
            
              <?php
              echo "</div>";
            
        echo "</section>";
        ?>


      
        
      
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>Despre Noi </h2>
                    <p>Suntem un site pentru turism in care iti poti gasi vacanta dorita.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Linkuri Utile</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Intrebari</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                           Strada George Cosbuc Nr 202 
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            0767072095
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                          apopescu193@yahoo.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
       
        
        <script src="script.js"></script>
    </body>
</html>
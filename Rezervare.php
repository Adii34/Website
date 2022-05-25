
<?php  session_start(); 

include('database_connection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
      
        <link rel="stylesheet" href="HoteluriStyle.css">
        <link rel="stylesheet" href="RezervareStyle.css">
       
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body>
        
  
        <header class = "headerBook" id = "header">
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
       <?php



     $query="Select *from hoteluri where ID='$_GET[pid]'";
     $result=mysqli_query($conn,$query); 
     $row=mysqli_fetch_array($result);
    $Nume=$row['Nume'];
    $Oras=$row['Oras'];
    $Pret=$row['Pret'];
    $Rating=$row['Rating'];
    $facilitate1=$row['Facilitate1'];
    $facilitate2=$row['Facilitate2'];
    $facilitate3=$row['Facilitate3'];
    $camera1=$row['Camera1'];
    $camera2=$row['Camera2'];
    $camera3=$row['Camera3'];
    $camera4=$row['Camera4'];
    



        echo "<div id = 'modal'></div>";
       echo "<section class='principal'>";
       echo " <div class = 'card-wrapper'>";
             
              echo "<div class = 'hotel-imgs'>";
                echo "<div class = 'img-display'>";
                 echo "<div class = 'img-showcase'>";
                    echo "<img src = ./Poze/$camera1  alt = 'shoe image'>";
                    echo" <img src = ./Poze/$camera2 alt = 'shoe image'>";
                    echo "<img src = ./Poze/$camera3 alt = 'shoe image'>";
                   echo  "<img src = ./Poze/$camera4 alt = 'shoe image'>";
                   
                  echo "</div>";
                echo "</div>";
                echo "<div class = 'img-select'>";
                  echo "<div class = 'img-item'>";
                    echo "<a href = '#' data-id = '1'>";
                        echo "<img src = ./Poze/$camera1 alt = 'shoe image'>";
                    echo "</a>";
                  echo "</div>";
                  echo "<div class = 'img-item'>";
                    echo "<a href = '#' data-id = '2'>";
                        echo "<img src = ./Poze/$camera2 alt = 'shoe image'>";
                   echo "</a>";
                  echo "</div>";
                echo "<div class = 'img-item'>";
                    echo "<a href = '#' data-id = '3'>";
                        echo "<img src = ./Poze/$camera3 alt = 'shoe image'>";
                    echo "</a>";
                  echo "</div>";
                  echo "<div class = 'img-item'>";
                    echo "<a href = '#' data-id = '4'>";
                        echo "<img src = ./Poze/$camera4 alt = 'shoe image'>";
                    echo "</a>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            
              echo "<div class = 'hotel-content'>";
                echo "<h2 class = 'hotel-title'>$Nume</h2>";
             
                echo "<div class = 'hotel-rating'>";
                for($i=0;$i<$Rating;$i++){
                  echo "<i class = 'fas fa-star'></i>";
              }
              for($i=$Rating;$i<5;$i++){
                echo "<span><i class = 'far fa-star'></i></span>";
                   }
           
           
                  
                echo "</div>";
      
                echo "<div class = 'hotel-price'>";
                 
                  echo "<p class = 'price'> PRICE: <span>$ $Pret/ per night</span></p>";
                echo "</div>";
      
                echo "<div class = 'hotel-detail'>";
                  echo "<h2>Servici incluse in pret: </h2>";
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
                        echo $facilitate2;
                    echo "</li>";
                echo "</ul>";
                echo "</div>";
      
             
      
          echo "</section>";
          echo "<script src='script.js'></script>"
          ?>
     
        <section class="rezervare">
            <div class = "book">
                <form class = "book-form" action="CosRezervari.php?PID=<?php echo $row['ID']?>" method="POST">
                
                    <div class = "form-item">
                        <label for = "checkin-date">Check In Date: </label>
                        <input type = "date" name="CheckIn" id = "chekin-date">
                    </div>
                    <div class = "form-item">
                        <label for = "checkout-date">Check Out Date: </label>
                        <input type = "date" name="CheckOut" id = "chekout-date">
                    </div>
                    <div class = "form-item">
                        <label for = "adult">Adults: </label>
                        <input type = "number" name="NrAdult" min = "1" max="2" value = "1" id = "adult">
                    </div>
                    <div class = "form-item">
                        <label for = "children">Children: </label>
                        <input type = "number" name="NrChildren" min = "0" max="2" value = "1" id = "children">
                    </div>
                    <div class = "form-item">
                        <label for = "rooms">Rooms: </label>
                        <input type = "number" name="NrRooms"  min = "1" value = "1" id = "children">
                    </div>
                    <div class = "form-item">
                        <input type = "submit" name="BookNow"  class = "btn" value = "Book Now">
                    </div>
                   
                </form>
            </div>
        </section>


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Clienti</h2>
                </div>
                <div class = "customers-container">
                 
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Noua ne-a placut aici</h3>
                        <p>Vom reveni cat mai curand</p>
                        <img src = "Customer.png" alt = "customer image">
                        <span>Popescu Ana Maria ,Caracal</span>
                    </div>
                  
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Un loc placut</h3>
                        <p>Am avut o experienta frumoasa</p>
                        <img src = "Customer2.png" alt = "customer image">
                        <span>Andreea Maria,Bucuresti</span>
                    </div>
             
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Foarte frumos</h3>
                        <p>Voi reveni</p>
                        <img src = "Customer1.jpg.png" alt = "customer image">
                        <span>Popescu Adrian ,Timisoara</span>
                    </div>
                    
                </div>
            </div>
        </section>

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
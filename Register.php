

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="RegisterStyle.css">
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
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class="container">
                <div class="title">SIGN UP</div>
                <form action="RegisterAction.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="Nume" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="Username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="Email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="Parola" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" name="ConfirmaParola" placeholder="Confirm your password" required>
                    </div>
                </div>
    
           
                  
                  <div class="button">
                      <input type="submit" name="submit" value="Register">
                  </div>
    
                </form>
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
          
            <button onclick="window.location.href='Login.php'" class = "btn log-in">Log In</button>
        </div>
      

        
        <div id = "modal"></div>
       

     
    

       
        
        <script src="script.js"></script>
    </body>
</html>
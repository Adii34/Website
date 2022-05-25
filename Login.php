

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="LoginStyle.css">
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

            <div class="center">
      
                <h1>Login</h1>
                <form method="POST" action="LoginAction.php">
                    <div class="txt_field">
                        <input type="text" id="user" required name="username" placeholder="Type your username">
                        <label>Username</label>
                    </div>
                    <div class="txt_field">
                       <input type="password" id="pass" name="password" required placeholder="Type yout password">
                       <label>Password</label>
                       <div class="pass">Ti-ai uitat parola?</div>
                       <input type="submit" value="Login" name="login" default>
                       <div class="signup_link">
                          Nu te-ai inscris? <a href="Register.php">SignUp</a>
                       </div>
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
          
            <button onclick="window.location.href='Register.php'" class = "btn log-in">Sign Up</button>
        </div>
      

        
        <div id = "modal"></div>
       

     
    

       
        
        <script src="script.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVELWEBSITE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="HoteluriStyle.css">
        <link rel="stylesheet" href="ContactUsStyle.css">
       
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
          
            <button onclick="window.location.href='Login.php'" class = "btn log-in">Log In</button>
             <button onclick="window.location.href='Register.php'" class = "btn log-in">Sign Up</button>
        </div>


        <div id = "modal"></div>
       

 <section class="contact">
<div class="continut">
    <form action="ContactUsAction.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Type your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lastname" name="lastname"placeholder="Type your last name..">


        <label for="email">Your Email</label>
        <input type="text" id="email" name="email" placeholder="Type your email...">
         
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" placeholder="Write something.." style="height:200px"></textarea>
        <input type="submit" name="Send" value="Send">
    </form>
</div>
   
        </section>

     
    

       
        
        <script src="script.js"></script>
    </body>
</html>
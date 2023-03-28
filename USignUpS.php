<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Signed Up </title>
    <link rel="icon" href="Media//Shoppic_Icon.png" type="image/x-icon">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="Login.style.css">
     <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>


<body>
     <div class="main">
          <div class="header">
               <div class="logo">
               <a href="home.php">
                <img src="Media/logo.png"></a>
               </div>
               <div class="search-wrapper">
                    <input type="text" id="product-id" placeholder="Search for a product" />
                    <div class="search-button">
                         <a href="#">
                              <img src="Media/Search-icon.png">
                         </a>
                    </div>
               </div>
          </div>

          <div class="Navbar">
               <ul>
                    <li><a class="active" href="home.php">HOME</a></li>
                    <li><a class="line" href="popular products.php">PRODUCTS</a></li>
                    <li><a class="line" href="categories.php">CATEGORIES</a></li>
                    <li><a class="line" href="#">ABOUT</a></li>
                    <li><a class="line" href="#footer">CONTACT</a></li>

          </div>
     </div>


     </div>

     <div class="login-panel">
          <h1 class="label">User Login</h1>
          <div class="login_form">

               <form action="ULogin.php" method="post">
                    <h2>SIGNUP Successful<br> Please Login. </h2>
                    <div class="font">Enter Email</div>
                    <input type="email" name="Remail" placeholder="Enter Email ">
                    <div class="font font2">Password</div>
                    <input type="password" name="Rpass" placeholder="Enter Password ">

                    <button type="submit">Login</button>
                    <center>
                         <h3 class="link">Don't have an account ?<br>
                              <p><a href="USignUp.html">Sign Up </a> here</p>

          </div>
     </div>

     <div id="footer">
          <h2>
               CONTACT
          </h2>
          <div class="social-links">
               <a href="#"><img src="Media/Social/facebook.png"></a>
               <a href="#"><img src="Media/Social/twitter.png"></a>
               <a href="#"><img src="Media/Social/instagram.png"></a>
               <a href="#"><img src="Media/Social/linkedin.png"></a>
               <a href="#"><img src="Media/Social/email.png"></a>
          </div>
     </div>
</body>

</html>
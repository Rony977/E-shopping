<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Catagories</title>
    <link rel="icon" href="Media//Shoppic_Icon.png" type="image/x-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-product-cards/1.0.0/bootstrap-product-pages.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css">
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

            <div class="login-status">
                <div class="avatar">
                <a href="profile page.php">
                        <img src="Media/user.png"></a>

      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM registration ');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
              <h4 class="profile"><?= $row['RLname'] ?></h4>
      <?php endwhile; ?>
                </div>
                
            </div>
        </div>

        <div class="Navbar">
            <ul>
                <li><a class="line" href="home.php">HOME</a></li>
                <li><a class="line" href="popular products.php">PRODUCTS</a></li>
                <li><a class="active" href="categories.php">CATEGORIES</a></li>
                <li><a class="line" href="#">ABOUT</a></li>
                <li><a class="line" href="#footer">CONTACT</a></li>

            </div>
        </div>
        <div class="advertisement">
        <p>
            Choose a Catagory
        </p>

        <div class="gallery">
            <div class="image-holder">
                <a href="products.php">
                    <img src="Media/Catagories/S23ultra.jpg" alt="img-1"></a>
                <div class="desc">
                    <h4>Mobile Phones</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href="products_2.php">
                    <img src="Media/Catagories/Apple Watch.jpg" alt="img-1"></a>
                <div class="desc">
                    <h4>Smart Watch</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="Media/Catagories/MacBook-Air-M2.jpg" alt="img-1"></a>
                <div class="desc">
                    <h4>Macbook</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="Media/Catagories/D850.jpg" alt="img-1"></a>
                <div class="desc">
                    <h4>Camera</h4>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="image-holder">
                <a href="#">
                    <img src="Media/Catagories/speaker.png" alt="img-1"></a>
                <div class="desc">
                    <h4>Speakers</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href=#">
                    <img src="Media/Catagories/XB700-1-800x800.png" alt="img-1"></a>
                <div class="desc">
                    <h4>Headphones</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="Media/Catagories/Apple AirPods 3.jpg" alt="img-1"></a>
                <div class="desc">
                    <h4>Earbuds</h4>
                </div>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="Media/Catagories/more-coming.png" alt="img-1"></a>
                <div class="desc">
                    <h4></h4>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="footer">
        <h2>
            CONTACT
        </h2>
        <div class="social-links">
            <a href="#"><a href="products.php">
                <img src="Media/Social/facebook.png"></a>
            <a href="#"><a href="products.php">
                <img src="Media/Social/twitter.png"></a>
            <a href="#"><a href="products.php">
                <img src="Media/Social/instagram.png"></a>
            <a href="#"><a href="products.php">
                <img src="Media/Social/linkedin.png"></a>
            <a href="#"><a href="products.php">
                <img src="Media/Social/email.png"></a>
        </div>
    </div>
</body>

</html>
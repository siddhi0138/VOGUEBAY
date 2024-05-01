<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Fashionwear E-commerce Website </title>
    <link rel="stylesheet", href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="homepage.css">

</head>
<body >
    
<section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php" >Shop</a></li>
            <li><a href="blog.php"  class="active">Blog</a></li>
            <li><a href="AboutUsECommerce.php" >About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Logout</a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>

        

    <section id="page-header" class="blog-header">
        
        <h2>#readmore</h2>
        
        <p>Read all case studies about our products!</p>
        
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/H1.jpg" alt="">
    </div>
        <div class="blog-details">
            <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
        <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies
        yr wolf chartreuse hexagon irony, godard...</p>
        <a href="#">CONTINUE READING</a>
    </div>
    <h1>13/81</h1>
</div>

<div class="blog-box">
    <div class="blog-img">
        <img src="img/H2.jpg" alt="">
</div>
<div class="blog-details">
        <h4>How to Style a Quiff</h4>
        <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies
        yr wolf chartreuse hexagon irony, godard...</p>
        <a href="#">CONTINUE READING</a>
<a href="#">CONTINUE READING</a>
</div>
<h1>13/81</h1>
</div>

<div class="blog-box">
    <div class="blog-img">
        <img src="img/H3.jpg" alt="">
</div>
<div class="blog-details">
    <h4>Must-Have Skater Girl Items</h4>
<p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies
yr wolf chartreuse hexagon irony, godard...</p>
    
<a href="#">CONTINUE READING</a>
</div>
<h1>13/81</h1>
</div>

<div class="blog-box">
    <div class="blog-img">
        <img src="img/H4.jpg" alt="">
</div>
<div class="blog-details">
    <h4>Runway-Inspired Trends</h4>
<p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies
yr wolf chartreuse hexagon irony, godard...</p>
<a href="#">CONTINUE READING</a>
</div>
<h1>13/81</h1>
</div>

<div class="blog-box">
    <div class="blog-img">
        <img src="img/H5.jpg" alt="">
</div>
<div class="blog-details">
    <h4>AW20 Menswear Trends</h4>
<p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies
yr wolf chartreuse hexagon irony, godard...</p>
<a href="#">CONTINUE READING</a>
</div>
<h1>13/81</h1>
</div>

</section>

    

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up for Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span>
                </p>
            </div>
            <div class="form">
                <input type="text"placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img src="img/COVER.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>567 Whistling Wood Road, Street 38, Los Angeles</p>
                <p><strong>Phone:</strong>+01 2222 789 / (+91) 5467 9865</p>
                <p><strong>Hours:</strong>10:00-18:00, Mon - Sun </p>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4></br>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>About</h4><br>
            <a href="#">Account</a>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4><br>
            <p>From App Store or Google Play Store</p>
            <div class="row">
                <img src="img/app.jpg"alt="">
                <img src="img/play.jpg"alt="">
            </div><br>
            <P>Secured Payment Gateways</P><br>
            <img src="img/pay.png"alt="">
        </div>

        <div class="copyright">
            <p> © 2024,  All Rights Reserved</p>
        </div>
    </footer>

    <script>
    // Function to render cart items
    function renderCartItems() {
        // Get cart items from localStorage
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
        // Count the total number of items in the cart
        var totalCount = cartItems.reduce(function(total, item) {
            return total + item.quantity;
        }, 0);
    
        // Update the cart count display
        var cartCount = document.getElementById('cart-count');
        cartCount.textContent = totalCount;
    }

    // Call renderCartItems when the page loads
    window.addEventListener('load', renderCartItems);
</script>
</body>

</html>
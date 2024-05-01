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
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>About Us</title>
 <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 <link rel="stylesheet" href="style/homepage.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <style>

        #page-header.about-header{
            background-image: url("banner.png");
            
            width:1700px;
            height:400px;
            background-repeat: no-repeat;
            background-position: center;
            text-align:center;
            
            
        }
        .row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap; /* This allows the boxes to wrap to the next row if there's not enough space */
}

.fe-box {
    flex: 1;
    
}
        #about-head {
            display: flex;
            align-items: center;
        }
        #about-head img{
            width: 50%;
            height:auto;
        }
        #about-head div{
            
            padding-left:0px;
        }
        #about-app{
            text-align:center;


        }
        #about-app .video{
            width: 70%;
            
        }
        #about-app .video video{
            width: 100%;
            height: 100%;
            border-radius:20px;
        }
        .section-p1{
            padding: 40px 40px;
        }
/* Example for the main content container */
.main-content {
    margin-top: 60px; /* Adjust this value based on the height of your navbar */
}

            #mobile{
                display:flex;
                align-items:center;
            }
            #mobile i{
                color:#1a1a1a;
                font-size:24px;
                padding-left:20px;

            }
            #close{
                display:initital;
                position:absolute;
                top:30px;
                left:30px;
                color:#222;
                font-size:24px;
            }
            #lg-bag{
                display:none;
            }
            #hero {
                height:70vh;
                padding:0 80px;
                background-position:top 30% right 30%
            }
            #feature {
                justify-content: space-between;
            }
            #feature .fe-box{
                width: 155px;
                margin:0 0 15px 0;
            }
            #product1.pro{
                width:100%;

            }

    </style>
    <section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="AboutUsECommerce.php" class="active">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Logout</a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>

 

    
    
    
        
        
        <section id="about-head" class="section-p1">
            
            <img src="img/a6.jpg" alt="" style=" height:400px;  width:790px; border-radius: 20px;">
            
            <div>
                <h2 style="margin:0 40px; ; ">Who are We?</h2>
                <br>
                
                
                
                <p style="margin:0 40px; font-size: 20px;"><strong >Our Vision:</strong> 
                We began with a smart but simple vision where technology and design go hand-in-hand to help people get a feel for its products, plus stylish blocks of color that tell us as much about the company as the text does. In terms of knowing what your audience wants to see, it’s hard to do better than this.
                    Whether you're a fashion enthusiast seeking the latest trends, a tech-savvy individual in pursuit of cutting-edge gadgets, or someone with a penchant for timeless classics, our curated collection has you covered. From stylish jewelry and chic handbags to state-of-the-art tech accessories and practical everyday items, we take pride in offering a diverse range that transcends age, gender, and lifestyle.
                </p>
                <br></br>
                
            </div>
        </section>
        <marquee background-color="#ccc" loop="-1" scrollamount="5" width="100%" style="color: red;">
            Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.
            </marquee>
        <section id="about-app" class="section-p1">
           <h1>Download Our <a href="#">App</a></h1>
           <div class="video">
            <video autoplay muted loop src="img/1.mp4" style="margin:0 220px;"></video>

           </div>

        </section>
        <section id="feature" class="section-p1">
            <div class="fe-box" >
                <img class="hello" src="img/img_freeshipping.jpg" alt="">
                <h6>Free Shipping</h6>
            </div>
    
            <div class="fe-box" >
                <img class="hello" src="img/img_onlineorder.jpg" alt="">
                <h6>Online Order</h6>
            </div>
    
            <div class="fe-box" >
                <img class="hello" src="img/img_savemoney.png" alt="">
                <h6>Save Money</h6>
            </div>
    
            <div class="fe-box" >
                <img class="hello"src="img/img_promotions.png" alt="">
                <h6>Promotions</h6>
            </div>
    
            <div class="fe-box" >
                <img class="hello" src="img/img_happysell.png" alt="">
                <h6>Happy Sell</h6>
            </div> 
    
            <div class="fe-box" >
                <img class="hello" src="img/img_24by7support.png" alt="">

                <h6>24/7 Support</h6>
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
        
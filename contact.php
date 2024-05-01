<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
?>


<?php
$showalert=false;
$showerror=false;
if(isset($_POST['name'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS myDB1";
    if ($conn->query($sql) === TRUE) {
      $database = true;
    }

    // SQL to create table
    $sql = "CREATE TABLE IF NOT EXISTS contact (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name1 VARCHAR(50) NOT NULL,
      email VARCHAR(50) NOT NULL,
      description1 VARCHAR(5000) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
       $table = true;
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $name1 = $_POST['name'];
    $email = $_SESSION['email'];
    $description1 = $_POST['desc'];

    $sql = "INSERT INTO `contact` (`name1`, `email`, `description1`)
VALUES ('$name1', '$email', '$description1')";

    if ($conn->query($sql) === TRUE) {
       $insert = true;
       $showalert=true;
       

    } else {
    $showerror=true;
    }

    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Contact Us</title>
 <link rel="stylesheet" type="text/css"
href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 <link rel="stylesheet" href="style/homepage.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
        
#navbar li {
        list-style: none;
        padding: 0px 23px;
        position:relative;
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
            #newsletter {
    display: flex;
    justify-content:space-between;
    flex-wrap:wrap;
    align-items:center;
    background-image:url("img/b14.png");
    background-repeat: no-repeat;
    background-position: 20% 30%;
    background-color: #041e42;
}


/*contact page*/
#contact-details {
    display:flex;
    align-items:center;
    justify-content:space-between;

}
#contact-details .details{
    width:40%;
}
#contact-details .details span,
#form-details form span{
    font-size:12px;
}
#contact-details .details h2,
#form-details form h2{
    font-size:26px;
    line-height:35px;
    padding:20px 0;
}
#contact-details .details h3{
    font-size:16px;
    padding-bottom:15px ;
}
#contact-details .details li{
    list-style:none;
    display:flex;
    padding:10px 0;
}
#contact-details .details li i{
    font-size:14px;
    padding-right:22px;
}
#contact-details .details li p{
    margin:0;
    font-size:14px;
}
#contact-details .map{
    width:55%;
    height:400px;

}
#contact-details .map iframe{
    width:100%;
    height:100%;

}
#form-details{
    display:flex;
    justify-content:space-between;
    margin: 30px;
    padding:80px;
    border:1px solid #e1e1e1;


}
#form-details form {
    width: 65%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
#form-details form input,
#form-details form textarea{
    width: 100%;
    padding: 12px 15px;
    outline:none;
    margin-bottom:20px;
    border: 1px solid #e1e1e1;
}
#form-details form button{
    background-color:#088178 ;
    color:#fff;
}
#form-details .people div{
    padding-bottom:25px;
    display:flex;
    align-items:flex-start;
}
#form-details .people div img{
    width:65px;
    height:65px;
    object-fit:cover;
    margin-right:15px;
}
#form-details .people div p{
   margin: 0;
   font-size: 13px;
   line-height:25px;

}
#form-details .people div p span{
    display:block;
    font-size:16px;
    font-weight:600;
    color:black;
}

</style>

</head>

<body>
<section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="AboutUsECommerce.php" >About</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Logout</a></li>
            <li><a href="cart.php" ><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>



    <?php
    if($showalert){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your query has been sent to us 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
    }

    if($showerror){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> An error has occured
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
        }
?>



        <section id="page-header" class="about-header">
            <h2 style="color:white;font-weight:bold;font-family:
'Spartans', sans-serif;">#let's_talk</h2>

            <p style="color:white;font-family: 'Spartans',
sans-serif;font-size:30px;">LEAVE A MESSAGE, We love to hear from
you!</p>
        </section>

        <section id="contact-details" class="section-p1">
         <div class="details">
           <span>GET IN TOUCH</span>
           <h2>Visit one of our agency locations or contact us today</h2>
           <h3>Head Office</h3>
           <div>
            <li>
                <i class="fal fa-map"></i>
                <p>56 Glassford Street Glasgow G1 1UL New York</p>

            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>contact@example.com</p>

            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>contact@example.com</p>

            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>Monday to Saturday: 9.00am to 16.pm</p>

            </li>


           </div>

         </div>

         <div class="map">
            <iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.8088029523014!2d-1.256941723820283!3d51.75481969259903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sin!4v1711509948482!5m2!1sen!2sin"
width="600" height="450" style="border:0;" allowfullscreen=""
loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
         </div>
        </section>

        <section id="form-details" >
         <form action="contact.php" method="post" >
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name">
           
            <textarea  id="desc" cols="30" rows="10" placeholder="Your
Message" name="desc"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="img/1.png" alt="">
                <p><span>Manish Goal</span>Senior Manager<br>Phone: +000 123
                000 77 88<br>Email:contact@example.com</p>
            </div>
            <div>
                <img src="img/2.png" alt="">
                <p><span>Karan Skaerwala</span>Senior Hr <br>Phone: +000 123
                000 77 88<br>Email:contact@example.com</p>
            </div>
            <div>
                <img src="img/3.png" alt="">
                <p><span>Sakshi Somaiya</span>Senior Marketing
Manager<br>Phone: +000 123
                000 77 88<br>Email:contact@example.com</p>
            </div>
        </div>
</section>
        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up for Newsletters</h4>
                <p>Get E-mail updates about our latest shop and
<span>special offers.</span>
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
                <p><strong>Address:</strong>567 Whistling Wood Road,
Street 38, Los Angeles</p>
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
            </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


     <?php
if ($showalert) {
    echo '
    <script>
        setTimeout(function() {
            window.location.href = "homepage.php";
        }, 3000); // 3 seconds delay
    </script>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your query has been submiited
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

if ($showerror) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> an error  has occured
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
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
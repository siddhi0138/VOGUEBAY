<?php
  $login=false;
  $showerror=false;


$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "signup";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    $uname =$_POST['uname'];
    $pass =$_POST['password'];

    
$sql = "SELECT * FROM register WHERE email='$uname' AND password1='$pass'";

   $result=mysqli_query($conn,$sql);
   $num=mysqli_num_rows($result);
   if($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['email']=$uname;
   
   }
   else{
    $showerror=true;
   }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha384-X2nXsBxM0XUsHxyz3+3vG0dX4W8/X5dFdsWzD5l9zHvL4xprw/Q5to0taO4yIAT5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body style="background-image: url(img/login.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
<section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="AboutUsECommerce.php" >About</a></li>
            <li><a href="contact.php" >Contact</a></li>
            <li><a href="login.php" class="active"><i class="fas fa-user"></i>Login</a></li>
            <li><a href="cart.php" ><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>
    <?php
    if($login){
    echo '
    <script>
        setTimeout(function() {
            window.location.href = "homepage.php";
        }, 3000); 
    </script>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have been logged in 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
    }

    if($showerror){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Invalid email or password
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
        }
?>
    
    <div class="wrapper">
        <form id="loginForm" action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input id="email" type="email" placeholder="Enter your email" required  name="uname"> 
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input id="password" type="password" placeholder="Password" required  name="password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="forgotpassword.php">Forgot Password? </a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>

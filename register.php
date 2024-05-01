<?php
$showalert=false;
$showerror=false;

if(isset($_POST['username'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE TABLE IF NOT EXISTS register (
        username VARCHAR(20) NOT NULL,
        age VARCHAR(3) NOT NULL,
        email VARCHAR(40) PRIMARY KEY NOT NULL UNIQUE,
       
        password1 VARCHAR(255) NOT NULL
    )";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Error creating table: " . $conn->error;
    } 

   
    $username = $_POST['username'];
    $age =$_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    // Check if username or email already exists
    // $check_query = "SELECT * FROM register WHERE username='$username' OR email='$email'";
    // $result = $conn->query($check_query);
    // if ($result->num_rows > 0) {
    //     // Username or email already exists
    //     $showerror = true;
    // } else {
        
    

        // Insert user data into the database
        $sql = "INSERT INTO register (username, age, email, password1) VALUES ('$username', '$age', '$email','$password')";
        if ($conn->query($sql) === TRUE) {
            $showalert = true;
        } else {
            $showerror = true;
        }
    // }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet", href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php" >Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="AboutUsECommerce.php" >About</a></li>
            <li><a href="contact.php" >Contact</a></li>
            <li><a href="login.php" class="active" ><i class="fas fa-user"></i>Login</a></li>
            <li><a href="cart.php" ><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>
    <?php
    if($showalert){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your account is now created and you can login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
    }

    if($showerror){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> The username or the email already exists
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
        }
?>
   
    <!-- Registration Form -->
    <div class="wrapper">
        <form id="registrationForm"   action="register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="Username" name="username" required  >
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box"> 
                <input type="text" id="age" placeholder="Age"  name="age" required>
            </div>

            <div class="input-box">
                <input type="email" id="email" placeholder="Enter your email..." name="email" required >
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn">Register</button>
    


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
    

    <script>
        // JavaScript for form validation
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var username = document.getElementById('username').value.trim();
            var age = document.getElementById('age').value.trim();
            var email = document.getElementById('email').value.trim();
            var password = document.getElementById('password').value.trim();
            var confirmPassword = document.getElementById('confirmPassword').value.trim();

            // Check for '@' in email
            if (!email.includes('@')) {
                alert('Please enter a valid email address!');
                event.preventDefault();
                return;
            }

            // Check if password meets criteria
            var passwordPattern = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{8,}$/;
            if (!password.match(passwordPattern)) {
                alert('Password must contain at least 8 characters, including letters, numbers, and special characters.');
                event.preventDefault();
                return;
            }

            // Check if password and confirm password match
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                event.preventDefault();
                return;
            }
        });

    
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     <?php
if ($showalert) {
    echo '
    <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000); // 3 seconds delay
    </script>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

if ($showerror) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> The username or the email already exists
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
</body>
</html>

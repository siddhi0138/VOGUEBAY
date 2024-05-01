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
    <title>SHOP </title>
    <link rel="stylesheet", href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/homepage.css">
</head>
<body >

<section id="header">
    <div>
        <ul id="navbar">
            <li><img src="img/COVER.png" class="logo" style="height: 50px; border-radius: 15px;"></li>
            <li><input type="text" class="active"  id="searchInput"  placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="shop.php" class="active">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="AboutUsECommerce.php" >About</a></li>
            <li><a href="contact.php" >Contact</a></li>
            <li><a href="logout.php" ><i class="fas fa-user"></i>Logout</a></li>
            <li><a href="cart.php" ><i class="fas fa-shopping-basket"></i><span id="cart-count"></span></a></li>
        </ul>
    </div>
</section>



<section id="page-header">
        
        <h2>#stayhome</h2>
        
        <p>Save more with coupons & up to 70% off!</p>
        
    </section>



    <section id="product1" class="section-p1">
        
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='products.php';">
            <img src="img/f1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
            </div>
                <h4>Rs 1300</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        <div class="pro"  >
            <img src="img/f2.jpg" alt="">
            <div class="des">
                <span>Kooli</span>
                <h5>Leafly Men's Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        
        <div class="pro"  >
            <img src="img/f8.jpg" alt="">
            <div class="des">
                <span>Kork</span>
                <h5>Airtight Tshirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1599</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        
        <div class="pro">
            <img src="img/f3.jpg" alt="">
            <div class="des">
                <span>Niva</span>
                <h5>Casual shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f4.jpg" alt="">
            <div class="des">
                <span>Dork</span>
                <h5>airless Tshirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1100</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f5.jpg" alt="">
            <div class="des">
                <span>Kooli</span>
                <h5>Enternic Shirt </h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 499</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f6.jpg" alt="">
            <div class="des">
                <span>Niva</span>
                <h5>Cartoon Astronaut T-shirt 2</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1500</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Air wet pants</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>

        <div class="row"></div>
        <div class="pro-container">
            <div class="pro">
            <img src="img/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Formals</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Foramls-II</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 899</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Formals-III</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 799</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Mascularia</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 699</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
    

        <div class="pro">
            <img src="img/n5.jpg" alt="">
            <div class="des">
                <span>Niva</span>
                <h5>Sleeves</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1000</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n6.jpg" alt="">
            <div class="des">
                <span>kooli</span>
                <h5>Shorts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/n7.jpg" alt="">
            <div class="des">
                <span>Kooli</span>
                <h5>Army Men shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1300</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        <div class="pro">
            <img src="img/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1300</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href=""><i class="fa-solid fa-arrow-right"></i></a>
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
    // Wait for the DOM content to be fully loaded
    document.addEventListener("DOMContentLoaded", function () {
    
        // Get all the 'Add to Cart' buttons
        var addToCartBtns = document.querySelectorAll('.cart');
    
        // Add click event listener to each 'Add to Cart' button
        addToCartBtns.forEach(function(btn) {
            btn.addEventListener('click', function () {
                // Get the product details
                var productName = this.parentNode.querySelector('.des h5').innerText;
                var productImageSrc = this.parentNode.querySelector('img').src;
                var priceText = this.parentNode.querySelector('.des h4').innerText;
                var price = parseFloat(priceText.replace('Rs ', '')); // Extract price from the text
                var selectedSize = "Select Size"; // You can modify this to dynamically get the selected size if needed
                var quantity = 1; // Assuming default quantity is 1
    
                // Create a new object for the product
                var product = {
                    name: productName,
                    image: productImageSrc,
                    size: selectedSize,
                    quantity: quantity,
                    price: price // Add the price to the product object
                };
    
                // Get the existing cart items from localStorage
                var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
                // Add the new product to the cart
                cartItems.push(product);
    
                // Store the updated cart items in localStorage
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
    
                // Redirect to the cart page
                window.location.href = "cart.php";
            });
        });
    
    });
</script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
    function filterProducts() {
        var searchInput = document.getElementById('searchInput').value.toLowerCase();
        var products = document.querySelectorAll('.pro');

        products.forEach(function (product) {
            var productName = product.querySelector('.des h5').innerText.toLowerCase();
            var company = product.querySelector('.des span').innerText.toLowerCase();
            var price = parseFloat(product.querySelector('.des h4').innerText.replace('Rs ', '').replace(',', ''));

            if (productName.indexOf(searchInput) > -1 || company.indexOf(searchInput) > -1 || price.toString().indexOf(searchInput) > -1) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    document.getElementById('searchInput').addEventListener('input', filterProducts);
});

    </script>
 
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
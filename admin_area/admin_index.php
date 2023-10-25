<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AviKesh The E-mart Emporium</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <nav class="nav">
        <h1 class="logo">AviKesh <span><sub>The E-mart Emporium</sub></span></h1>

        

        <div class="search">
            <input type="search">
            <button type="submit" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
        </div>

        <ul class="nav_list">
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><img src="../icon/cart.svg" alt="Cart"></li>
        </ul>

        <div class="menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    </nav>
    <hr>

    <header>Manage Details</header>

   <div class="container">

        <div class="admin_profile">
            <div class="img">
                <img src="../img/product.jpg" alt="Admin profile">
                <label for="admin name">admin name</label>
                <button class="btn"><a href="#">Log out</a></button>
            </div>
        </div>

        <div class="product_list">
            <ul>
                <li><a href="#">Insert Product</a></li>
                <li><a href="#">View Product</a></li>
                <li><a href="#">All Orders</a></li>
                <li><a href="#">All Payments</a></li>
                <li><a href="#">List users</a></li>
            </ul>
        </div>
   </div>
   <hr>
   
   






    <script src="admin_script.js"></script>
</body>
</html>
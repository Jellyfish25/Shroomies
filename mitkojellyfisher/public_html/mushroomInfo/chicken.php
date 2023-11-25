<?php
  include 'cookies.php';
  updateCookies("Chicken_of_the_Woods");
?>

<link rel="stylesheet" href="info.css">
<!DOCTYPE html>
<html>

<head>
  <title>Shroomies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="../style.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <a href="../">
      <img class="logo" src="../images/shroomiesLogo.png" alt="logo">
    </a>
    <nav>
      <ul class="nav__links">
        <li><a href="../">Home</a></li>
        <li><a href="../about">About</a></li>
        <li><a href="../products">Products</a></li>
        <li><a href="../news">News</a></li>
        <li><a href="../contacts">Contacts</a></li>
        <li><a href="../admin">Admin</a></li>
      </ul>
    </nav>
    <a class="cta" href="../login"><button>Users</button></a>
  </header>

  <main>
    <br>
    <div class="row-container">
      <img class="image-style" src="../images/chicken-of-the-woods.jpg">
      <div class="text-box">
        <h1 style="color: hotpink">Chicken of the Woods Mushroom</h1>
        <p1 style="color: white; margin-top:20px"> 
            The Chicken of the Woods mushroom, scientifically known as Laetiporus, 
            is an edible mushroom variety with a unique appearance and a taste that 
            some people say resembles chicken or other poultry. 
            Here's some information about these distinctive fungi:
        </p1>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Flavor
        </h2>
    
        <p2>
            Chicken of the Woods mushrooms are prized for their taste, 
            which is often described as having a mild, lemony, and slightly nutty flavor. 
            Some say it has a texture and taste reminiscent of chicken or other poultry, 
            which is how it got its name.
        </p2>
        
        <br>
        <h2 style="color: lightblue; text-align: center">
          Nutrition
        </h2>

        <p2>
            Chicken of the Woods mushrooms are rich in vitamins and minerals, 
            including B-vitamins, potassium, and dietary fiber. While they are not 
            typically consumed for medicinal purposes, 
            some believe they offer potential health benefits due to their nutritional content.
        </p2>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Cooking
        </h2>

        <p2>
            These mushrooms are versatile in the kitchen. 
            They can be used in a variety of dishes, 
            including stir-fries, soups, curries, and vegetarian or vegan recipes. 
            Their unique taste pairs well with herbs, garlic, and onions.
        </p2>

        <br>
        <p1 style="text-align: center">
          $25.99
          <br>
          <button class="buy-button" style="max-width: 150px;"> Add To Cart</button>
        </p1>
      </div>
    </div>
    <br>
</main>

<section class="footer">
  &copy; <em id="date"></em> 2023 Shroomies
  <ul class="footer__links">
    <li><a href="/">Privacy Policy</a></li>
    <li><a href="/">Accessibility</a></li>
    <li><a href="/">Terms</a></li>
    <li><a href="/">Contact Us</a></li>
  </ul>
</section> 
</body>
</html>
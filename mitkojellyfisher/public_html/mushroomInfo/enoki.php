<?php
  include 'cookies.php';
  updateCookies("Enoki");
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
      <img class="image-style" src="../images/enokiMushroom.jpg">
      <div class="text-box">
        <h1 style="color: hotpink">Enoki Mushroom</h1>
        <p1 style="color: white; margin-top:20px"> 
            Enoki mushrooms, also known as Enokitake or Flammulina velutipes, 
            are a delicate and edible mushroom variety that is highly regarded 
            for its mild flavor and unique appearance. Here's some information about these edible fungi:
        </p1>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Flavor
        </h2>
    
        <p2>
            Enoki mushrooms have a mild, slightly sweet, and somewhat fruity flavor. 
            Their taste is subtle, making them an excellent addition to a wide range of dishes.
       </p2>
        
        <br>
        <h2 style="color: lightblue; text-align: center">
          Nutrition
        </h2>

        <p2>
            Enoki mushrooms are low in calories and fat. They are a good source of essential nutrients, 
            including B-vitamins like niacin, pantothenic acid, and riboflavin, as well as minerals like potassium, 
            copper, and selenium.
        </p2>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Cooking
        </h2>

        <p2>
            Enoki mushrooms are versatile in the kitchen. They can be used in soups, 
            salads, stir-fries, and hot pots. Their slender stems and small caps cook quickly, 
            adding a unique texture and flavor to dishes.
        </p2>
        <br>
        <p1 style="text-align: center">
          $11.99
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
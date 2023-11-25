<?php
  include 'cookies.php';
  updateCookies("Cremini");
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
      <img class="image-style" src="../images/creminiMushroom.jpg">
      <div class="text-box">
        <h1 style="color: hotpink">Cremini Mushroom</h1>
        <p1 style="color: white; margin-top:20px"> 
            Cremini mushrooms, scientifically known as Agaricus bisporus, are a popular and edible 
            mushroom variety with a rich, earthy flavor. They are sometimes referred to as "baby bella" 
            or "baby portobello" mushrooms due to their close relationship to the well-known portobello mushrooms. 
            Here's some information about these delicious fungi:
        </p1>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Flavor
        </h2>
    
        <p2>
            Cremini mushrooms have a robust, earthy flavor that is more intense 
            than the white button mushrooms but milder than their mature counterpart, 
            the portobello. This makes them a versatile and tasty choice for various dishes.
        </p2>
        
        <br>
        <h2 style="color: lightblue; text-align: center">
          Nutrition
        </h2>

        <p2>
            Cremini mushrooms are a healthy addition to your diet. 
            They are low in calories and fat, a good source of vitamins, 
            particularly B-vitamins like riboflavin, niacin, and pantothenic acid, 
            and provide essential minerals like selenium, copper, and potassium.
        </p2>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Cooking
        </h2>

        <p2>
            These mushrooms can be used in a wide range of dishes. 
            They are suitable for sautéing, grilling, roasting, and adding to soups, stews, 
            and omelets. Their rich flavor makes them a fantastic complement to meat, poultry, and vegetarian dishes.
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
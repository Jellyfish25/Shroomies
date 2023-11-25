<?php
  include 'cookies.php';
  updateCookies("Beech");
?>

<link rel="stylesheet" href="info.css">
<!DOCTYPE html>

<html>
<head>
  <title>Shroomies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <img class="image-style" src="../images/beechMushroom.webp">
      <div class="text-box">
        <h1 style="color: hotpink">Beech Mushroom</h1>
        <p1 style="color: white; margin-top:20px"> 
            Beech mushrooms, also known as Hypsizygus tessellatus or clamshell mushrooms, 
            are a delicious and edible species of mushrooms with a distinct appearance and a mild, 
            nutty flavor. Here's some information about these delectable fungi:
        </p1>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Flavor
        </h2>
    
        <p2>
            Beech mushrooms have a mild, slightly sweet, and nutty flavor. 
            This mild taste makes them a versatile addition to a variety of dishes.
       </p2>
        
        <br>
        <h2 style="color: lightblue; text-align: center">
          Nutrition
        </h2>

        <p2>
            Beech mushrooms are a good source of essential nutrients, including B-vitamins 
            (such as riboflavin and niacin), fiber, and minerals like potassium and selenium. 
            They are also low in calories and fat.
        </p2>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Cooking
        </h2>

        <p2>
            Beech mushrooms can be used in a wide range of culinary applications. 
            They are suitable for sautéing, stir-frying, grilling, or even adding to soups, stews, 
            and pasta dishes. Their delicate flavor pairs well with various seasonings and ingredients.        
        </p2>
        <br>
        <p1 style="text-align: center">
          $69.42
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
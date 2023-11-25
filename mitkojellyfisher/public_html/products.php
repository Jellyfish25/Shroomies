<?php
    //deal with caching issue (req flushing everytime to update top_products arr)
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");

    include "mushroomInfo/cookies.php";
    $top_products = getTopProducts();
?>

<link rel="stylesheet" href="products.css">
<!DOCTYPE html>
<html>
  
<head>
  <title>Shroomies | Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
</head>

<body>
<header>
  <a href="./">
    <img class="logo" src="images/shroomiesLogo.png" alt="logo">
  </a>
<nav>
    <ul class="nav__links">
    <li><a href="/">Home</a></li>
    <li><a href="./about">About</a></li>
    <li><a href="./products">Products</a></li>
    <li><a href="./news">News</a></li>
    <li><a href="./contacts">Contacts</a></li>
    <li><a href="./admin">Admin</a></li>
    </ul>
</nav>
<a class="cta" href="./login"><button>Users</button></a>
</header>

  <main style="padding-top: 1px">
    <div class="row-container">
      <div class="card">
        <a href="./mushroomInfo/kingTrumpet">
          <img class="card-image" src="images/kingTrumpetMushroom.webp" alt="king">
        </a>
        <h2> King Trumpet Mushrooms </h2>
        <h1> $35.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/lobster">
          <img class="card-image" src="images/lobsterMushroom.png" alt="lobster">
        </a>
        <h2> Lobster Mushrooms </h2>
        <h1> $55.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/chicken">
          <img class="card-image" src="images/chicken-of-the-woods.jpg" alt="chicken">
        </a>
        <h2> Chicken of the Woods </h2>
        <h1> $25.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/blueOyster">
          <img class="card-image" src="images/blueOysterMushroom.jpg" alt="oyster">
        </a>
        <h2> Blue Oyster Mushrooms </h2>
        <h1> $36.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/shiitake">
          <img class="card-image" src="images/shiitakeMushroom.jpg" alt="shiitake">
        </a>
        <h2> Shiitake Mushrooms </h2>
        <h1> $18.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>
    </div>

    <div class="row-container">
      <div class="card">
        <a href="./mushroomInfo/enoki">
          <img class="card-image" src="images/enokiMushroom.jpg" alt="enoki">
        </a>
        <h2> Enoki Mushrooms </h2>
        <h1> $11.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/puffball">
          <img class="card-image" src="images/puffballMushroom.webp" alt="puffball">
        </a>
        <h2> Puffball Mushrooms </h2>
        <h1> $21.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/cremini">
          <img class="card-image" src="images/creminiMushroom.jpg" alt="cremini">
        </a>
        <h2> Cremini Mushrooms </h2>
        <h1> $25.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/beech">
          <img class="card-image" src="images/beechMushroom.webp" alt="beech">
        </a>
        <h2> Beech Mushrooms </h2>
        <h1> $69.42 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>

      <div class="card">
        <a href="./mushroomInfo/chanterelle">
          <img class="card-image" src="images/chanterelleMushroom.jpg" alt="chanterelle">
        </a>
        <h2> Chanterelle Mushrooms </h2>
        <h1> $18.99 </h1>
        <button class="buy-button"> Add To Cart</button>
      </div>
    </div>
    <br>
    <br>
    <h1>
      Recently Viewed Mushrooms
    </h1>

    <div style="display: inline-block; text-align: left;">
      <?php
        if(!isset($_COOKIE["containsCookies"])) {
          print( "<tr><td bgcolor=\"#F0E68C\">No mushrooms have been viewed recently</td></tr>");
        }
        else {
        foreach ($top_products as $key => $value) 
          print(
            "<tr> 
              <td bgcolor=\"#FFA500\">$value</td> 
              <td bgcolor=\"#F0E68C\">$valMap[$key]</td> 
            </tr>
          <br>");
        }
      ?>
    </div>
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


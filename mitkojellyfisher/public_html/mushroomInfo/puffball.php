<?php
  include 'cookies.php';
  updateCookies("Puff_Ball");
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
      <img class="image-style" src="../images/puffballMushroom.webp">
      <div class="text-box">
        <h1 style="color: hotpink">Puffball Mushroom</h1>
        <p1 style="color: white; margin-top:20px"> 
            Puffball mushrooms are a unique and edible group of fungi that are prized 
            for their distinctive appearance and mild, nutty flavor. 
            They are known for their characteristic round shape and ability to 
            puff out a cloud of spores when mature. Here's some information about these 
            fascinating and edible mushrooms:
        </p1>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Flavor
        </h2>
    
        <p2>
            Puffballs are prized for their mild, nutty, and earthy flavor. 
            The taste is often compared to tofu or tofu skin, making them a 
            versatile addition to a wide range of dishes.
       </p2>
        
        <br>
        <h2 style="color: lightblue; text-align: center">
          Nutrition
        </h2>

        <p2>
            Puffball mushrooms are relatively low in calories and fat, 
            making them a healthy addition to your diet. 
            They also provide some dietary fiber and a range of essential nutrients.
        </p2>

        <br>
        <h2 style="color: lightblue; text-align: center">
          Cooking
        </h2>

        <p2>
            Puffballs can be sliced, breaded, and sautéed, similar to the way you might 
            prepare traditional mushrooms. Their mild flavor makes them an excellent 
            canvas for a variety of seasonings and cooking techniques.      
        </p2>
        <br>
        <p1 style="text-align: center">
          $21.99
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
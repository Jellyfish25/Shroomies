<link rel="stylesheet" href="contacts.css">
<!DOCTYPE html>
<html>

<head>
  <title>Shroomies | Contacts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- navigation bar -->
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

  <main>
    <h1> Contact Us! </h1>
    <div class="row-container">
      <div class="card">
        <i class="fa fa-envelope"></i>
        <p>info@shroomies.com</p>
        Email us your query
      </div>

      <div class="card">
        <i class="fa fa-phone"></i>
        <p>+1 123-456-7899</p>
        Saturday and Sunday 12AM-6AM PST
      </div>

      <div class="card">
        <i class="fa fa-map-marker"></i>
        <p>Milpitas, CA</p>
        Within the Jungle
      </div>
    </div>

    <h1> Meet the Staff </h1>
        
    <div class="row-container">
        <p class="text">
            <?php include "contactsReader.php"; ?> 
        </p>
        <!-- <img class="contacts-image" src="images/mushroomPicker.png" alt="picker"> -->
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
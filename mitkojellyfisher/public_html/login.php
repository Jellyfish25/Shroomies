<link rel="stylesheet" href="login.css">
<!DOCTYPE html>

<html>
<head>
  <title>Shroomies | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <main>
    <section class="page-container">
      <div class="login-form">
        <form action = "login" method = "post">
            <head style = "text-align: center;">
            <br>
            <h1>User Creation</h1>
            <br>          
            <strong style = "padding-bottom: 25px">First Name:</strong>
            <br>
            <input size = "100" name = "firstName" class = "text-field-style" style="width: 200px"/>
            <br>
            <strong style = "padding-bottom: 25px">Last Name:</strong>
            <br>
            <input size = "100" name = "lastName" class = "text-field-style" style="width: 200px"/>
            <br>
            <strong style = "padding-bottom: 25px">Email Address:</strong>
            <br>
            <input size = "100" name = "Email" class = "text-field-style" style="width: 200px"/>
            <br>
            <strong style = "padding-bottom: 25px">Home Address:</strong>
            <br>
            <input size = "100" name = "homeAddress" class = "text-field-style" style="width: 200px"/>
            <br>
            <strong style = "padding-bottom: 25px">Home Phone:</strong>
            <br>
            <input size = "100" name = "homePhone" class = "text-field-style" style="width: 200px"/>
            <br>
            <strong style = "padding-bottom: 25px">Cell Phone:</strong>
            <br>
            <input size = "100" name = "cellPhone" class = "text-field-style" style="width: 200px"/>

            <!-- login buttons -->
            <div id="successMessage" style="display: none; color: green; padding-top: 10px;">
            Success: User created successfully.
            </div>
            <div id="errorCreateMessage" style="display: none; color: red; padding-top: 10px;">
            Error: Please fill out all fields.
            </div>
            <section style = "padding-bottom: 5%">
                <tr>
                    <td colspan = "1">
                        <input type = "submit" name = "Enter" value = "Create" class = "button-style"/>
                    </td>
                </tr>
            </section>
      </div>

      <!-- search section !-->
        <div class="login-form">
            <head style = "text-align: center;">
                <div style="text-align: center">
                    <br>
                    <h1>User Search</h1>
                    <br>

                    <strong style = "padding-right: 10px">Search By:</strong>
                    <select name = "select" class="text-field-style" style="width: 100px; background-color: white"> 
                    <option selected = "selected">Name</option> 
                    <option>Email</option> 
                    <option>Phone</option> 
                    </select> 
                    <input size = "50" name = "searchVal" class = "text-field-style"/>
                    <br>
                    <input type = "submit", name = "Enter" value = "Search" class="button-style"/> 
                    <br>
                    <br>
                    <strong>Results:</strong>
                    <br>
                    <div id="errorSearchMessage" style="display: none; color: red; padding-top: 10px;">
                    Error: Please fill out the search field.
                    </div>
                    <br>
                    
                    <?php
                        $host = "localhost"; // The MySQL database host name.
                        $username = "ugkpqzaxjhsvg"; // Your MySQL database username.
                        $password = "ncrlmg5usbvr"; // Your MySQL database password.
                        $database = "dbrc3uwg4pyghm"; // Your MySQL database name.

                        // Create a connection to the MySQL database
                        $connection = mysqli_connect($host, $username, $password, $database);

                        // Check the connection
                        if (!$connection) {
                            exit("Connection failed: " . mysqli_connect_error());
                        }
                        
                        //either update database to insert a new user, or search database
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Enter"]) && $_POST["Enter"] == "Search") {
                            include("./backend/search.php");
                        }
                        else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Enter"]) && $_POST["Enter"] == "Create") {
                            include("./backend/create.php");
                        }
                        
                        mysqli_close($connection);
                    ?>
                </div>
            </head>
        </div>
    </section>
    <br>

    <!-- view all users (from both websites) !-->
    <section class="users-container" style="min-height: 50px">
        <br>
        <h1>All Users Display</h1>
        <div style="text-align: center">
        <input type = "submit", name = "Enter" value = "Display Users" class="button-style" style="width: 200px"/> 
        </div>
        <br>
        
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Enter"]) && $_POST["Enter"] == "Display Users") {
            $host = "localhost"; // The MySQL database host name.
            $username = "ugkpqzaxjhsvg"; // Your MySQL database username.
            $password = "ncrlmg5usbvr"; // Your MySQL database password.
            $database = "dbrc3uwg4pyghm"; // Your MySQL database name.

            // Create a connection to the MySQL database
            $connection = mysqli_connect($host, $username, $password, $database);

            // Check the connection
            if (!$connection) {
                exit("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM user";
            $result = mysqli_query($connection, $query);

            // Check if the query was successful
            if (!$result) {
                die("Search failed: " . mysqli_error($connection));
            }

            // display mitkoJellyfisher page
            echo '<table class="custom-table" border="1" style="background: white">';
            echo '<h1> www.mitkojellyfisher.com </h1>';

            // Create the table header row with column names
            echo '<tr>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Email</th>';
            echo '<th>Address</th>';
            echo '<th>Cell Phone</th>';
            echo '<th>Home Phone</th>';
            echo '</tr>';

            // fetch and process the results using a loop, e.g., a while loop
            while ($row = mysqli_fetch_assoc($result)) {
                // Process each row of data
                echo '<tr>';
                echo '<td>' . $row['firstName'] . '</td>';
                echo '<td>' . $row['lastName'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['homeAddress'] . '</td>';
                echo '<td>' . $row['cellPhone'] . '</td>';
                echo '<td>' . $row['homePhone'] . '</td>';
                echo '</tr>';
            }
            mysqli_close($connection);
            include("./backend/displaycURL.php");
        }
    ?>
    </section>
  </main>
<br>
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
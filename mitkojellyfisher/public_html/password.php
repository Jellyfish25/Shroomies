<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Fig. 26.16: password.php -->
<!-- Searching a database for usernames and passwords. -->
<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <?php
            extract($_POST);

            // check if user has left USERNAME or PASSWORD field blank
            if (!$USERNAME || !$PASSWORD) {
                fieldsBlank();
                die();
            }

            // check if the New User button was clicked
            if (isset($NewUser)) {

              //check if the account doesn't exist
                if (!($file = fopen("password.txt", "r"))) {
                    print( "<title>Error</title></head><body>Could not open password file</body></html>" );
                    die();
                }
                while (!feof($file)) {
                  // read line from file
                  $line = fgets($file, 255);

                  // remove newline character from end of line
                  $line = chop($line);

                  // split username and password
                  $field = explode(",", $line, 2);

                  // verify that account doesn't already exist
                  if ($USERNAME == $field[0]) {
                    print( "<title>Error</title></head>
                      <body style = \"font-family: arial;
                      font-size: 1em; color: red\">
                      <strong>Account already exists. <br />Access has
                      been denied.</strong>");
                    die();
                  }
                }
                fclose($file);

                // open password.txt for writing using append mode
                if (!( $file = fopen( "password.txt","a" ))) {
                  // print error message and terminate script
                    // execution if file cannot be opened
                    print("<title>Error</title></head><body>
                        Could not open password file
                        </body></html>" );
                    die();
                }

                // write username and password to file and
                // call function userAdded
                fputs($file, "$USERNAME,$PASSWORD\n");
                userAdded($USERNAME);
            }
            else {
                // if a new user is not being added, open file
                // for reading
                if (!($file = fopen("password.txt", "r"))) {
                    print( "<title>Error</title></head><body>Could not open password file</body></html>" );
                    die();
                }

                $userVerified = 0;
                // read each line in file and check username
                // and password
                while (!feof($file) && !$userVerified) {
                  // read line from file
                  $line = fgets($file, 255);

                  // remove newline character from end of line
                  $line = chop($line);

                  // split username and password
                  $field = explode(",", $line, 2);

                  // verify username
                  if ($USERNAME == $field[0]) {
                    $userVerified = 1;

                    // call function checkPassword to verify
                    // user’s password
                    if (checkPassword($PASSWORD, $field) == true) {
                      accessGranted($USERNAME);
                    }
                  }
                }
                wrongPassword();
                fclose($file);
              }

              // verify user password and return a boolean
              function checkPassword( $userpassword, $filedata ) {
                if ( $userpassword == $filedata[ 1 ] ) {
                  return true;
                }
                else {
                  return false;
                }
              }

              //print a message indicating the user has been added
              function userAdded($name) {
                print("<title>Thank You</title></head>
                        <body style = \"font-family: arial;
                        font-size: 1em; color: blue\">
                        <strong>You have been added
                        to the user list, $name.
                        <br />Enjoy the site.</strong>");
              }
              // print a message indicating permission
              // has been granted
              function accessGranted($name) {
                // wp_set_current_user($name);
                if($name === "admin") {

                  //********* implement on actual web site later *************
                  //echo "<script> location.href='./admin'; </script>";
                  // echo "<title>Admin View</title>";
                  echo "<h1 style = 'color: deeppink'>Admin View</h1>\n\n";
                  echo "<h2> Current Users </h2>\n\n";
                  $file = fopen("users.txt", "r") or die("Unable to open file");
                  $text = fread($file, filesize("contacts.txt"));
                  echo nl2br($text);
                  fclose($file);
                  die();
                }
                else {
                  echo "<script> location.href='./'; </script>";
                }
                die();
              }

              // print a message indicating password is invalid
              function wrongPassword() {
                print( "<title>Access Denied</title></head>
                  <body style = \"font-family: arial;
                  font-size: 1em; color: red\">
                  <strong>You entered an invalid
                  password.<br />Access has
                  been denied.</strong>");
                // $error = "Password is invalid";
                // echo "<script> location.href='./login'; </script>";
              }

              // print a message indicating that fields
              // have been left blank
              function fieldsBlank() {
                print("<title>Access Denied</title></head>
                <body style = \"font-family: arial;
                font-size: 1em; color: red\">
                <strong>
                Please fill in all form fields.
                <br /></strong>");
              }
          ?>
  </body>
</html> 

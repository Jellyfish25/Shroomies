<?php
    // Get the selected search criteria from the dropdown
    $selectedOption = $_POST['select'];

    // Get the entered search value
    $searchValue = $_POST['searchVal'];

    if($searchValue == "") {
        echo '<script> document.getElementById("errorSearchMessage").style.display = "block"; </script>';
    }
    else {
        // Define the SQL query based on the selected option and search value
        if ($selectedOption == "Name") {
            $query = "SELECT * FROM user WHERE firstName LIKE '%$searchValue%' OR lastName LIKE '%$searchValue%'";
        }
        elseif ($selectedOption == "Email") {
            $query = "SELECT * FROM user WHERE email LIKE '%$searchValue%'";
        }
        else {
            $query = "SELECT * FROM user WHERE homePhone LIKE '%$searchValue%' OR cellPhone LIKE '%$searchValue%'";
        }

        // Execute the query
        $result = mysqli_query($connection, $query);

        // Check if the query was successful
        if (!$result) {
            die("Search failed: " . mysqli_error($connection));
        }

        // fetch and process the results using a loop, e.g., a while loop
        while ($row = mysqli_fetch_assoc($result)) {
            // Process each row of data
            echo "First Name: " . $row["firstName"] . "<br>";
            echo "Last Name: " . $row["lastName"] . "<br>";
            echo "Home Phone: " . $row["homePhone"] . "<br>";
            echo "Cell Phone: " . $row["cellPhone"] . "<br>";
            echo "Email: " . $row["email"] . "<br><br>";
        }
    }
?>